const fs = require('fs');
const path = require('path');
const https = require('https');

function replaceTextInFiles(folderPath, replacements) {
  try {
    const files = fs.readdirSync(folderPath); // Synchronously read the directory

    files.forEach(file => {
      const filePath = path.join(folderPath, file);
      const stats = fs.statSync(filePath); // Synchronously get file stats

      if (stats.isDirectory()) {
        replaceTextInFiles(filePath, replacements); // Recursively call for subdirectories
      } else  {
        const data = fs.readFileSync(filePath, 'utf8'); // Synchronously read the file
        
        // Perform all replacements
        let updatedData = data;
        replacements.forEach(({ search, replace,regex }) => {
          if (regex) {
          updatedData = updatedData.replace(new RegExp(search, 'g'), replace);
          } else {
            updatedData = updatedData.split(search).join(replace);
          }
        });

        fs.writeFileSync(filePath, updatedData, 'utf8'); // Synchronously write the file
        // console.log(`Text replaced in file: ${filePath}`);
      }
    });
  } catch (err) {
    console.error('Error:', err);
  }
}

function copyFolder(source, destination) {
    // Ensure the destination folder exists
    fs.mkdirSync(destination, { recursive: true });

    // Read the contents of the source folder
    const items = fs.readdirSync(source);

    items.forEach(item => {
        const srcPath = path.join(source, item);
        const destPath = path.join(destination, item);

        // Check if the current item is a directory or a file
        if (fs.statSync(srcPath).isDirectory()) {
            // Recursively copy the folder
            copyFolder(srcPath, destPath);
        } else {
            // Check if the file already exists at the destination
            if (!fs.existsSync(destPath)) {
                // Copy the file if it does not exist
                fs.copyFileSync(srcPath, destPath);
                //console.log(`Copied: ${srcPath} to ${destPath}`);
            } else {
                //console.log(`Skipped (already exists): ${destPath}`);
            }
        }
    });
}

function downloadfile(url, folder, file) {

// Define the directory and file name
const directory = folder;
const filePath = path.join(directory, file);

// Ensure the directory exists
fs.mkdirSync(directory, { recursive: true });

// Function to download the file
https.get(url, (response) => {
    if (response.statusCode === 200) {
        // Pipe the response data to a file
        const fileStream = fs.createWriteStream(filePath);
        response.pipe(fileStream);

        fileStream.on('finish', () => {
            fileStream.close();
            console.log(`Downloaded and saved to ${filePath}`);
        });
    } else {
        console.error(`Failed to get '${url}' (${response.statusCode})`);
    }
}).on('error', (err) => {
    console.error(`Error: ${err.message}`);
});
}


function copyFile(src, dest) {
  fs.copyFile(src, dest, (err) => {
      if (err) {
          console.error(`Error copying file from ${src} to ${dest}:`, err);
      } else {
          console.log(`Successfully copied ${src} to ${dest}`);
      }
  });
}

const siteDir = path.join(__dirname, '_site');
const domain = 'wpkind.com';

const date = new Date();

replaceTextInFiles(siteDir, [
  { search: 'localhost:\\d{4}', replace: `${domain}`, regex:true}, // do this first so we catch //localhost in xml sitemaps
  { search: `http://${domain}`, replace: `https://${domain}` ,regex:true},
  { search: `http:\\/\\/${domain}`, replace: `https:\\/\\/${domain}` ,regex:false}, // this catches escaped urls inside json
]);
console.log('Renamed domain');

// Copy the files directly without intermediate variables
copyFile(path.join(__dirname, '_headers'), path.join(siteDir, '_headers'));
copyFile(path.join(__dirname, '_redirects'), path.join(siteDir, '_redirects'));

//copy folders we need for the static site
copyFolder(
  path.join(__dirname, '/web/wp-content/uploads'), 
  path.join(siteDir, 'wp-content/uploads')
);
copyFolder(
  path.join(__dirname, '/web/wp-content/themes'), 
  path.join(siteDir, 'wp-content/themes')
);
copyFolder(
  path.join(__dirname, '/web/wp-content/plugins'), 
  path.join(siteDir, 'wp-content/plugins')
);

console.log(`Copied files`);
