import { lightColorShadesArray, darkColorShadesArray, csColors } from './colours.ts';
import tinycolor from 'tinycolor2';

// light color scheme
const rootDefault = `<style>
    :root {
        ${Object.entries(lightColorShadesArray)
            .map(([colorSet, shades]) =>
                Object.entries(shades)
                    .map(
                        ([shade, color]) => `
                    --${colorSet}-${shade}: ${tinycolor(color).toRgbString()};
                    --${colorSet}-${shade}-light: ${tinycolor(color).toRgbString()};
                    --${colorSet}-${shade}-rgb: ${tinycolor(color).toRgb().r},${tinycolor(color).toRgb().g},${tinycolor(color).toRgb().b};
                    `
                    )
                    .join('\n')
            )
            .join('\n')}

            ${csColors}

            --pure-white: white;
            --pure-black: black;
            }
            
            .light {
                ${Object.entries(lightColorShadesArray)
                    .map(([colorSet, shades]) =>
                        Object.entries(shades)
                            .map(
                                ([shade, color]) => `
                            --${colorSet}-${shade}: ${tinycolor(color).toRgbString()};
                            --${colorSet}-${shade}-rgb: ${tinycolor(color).toRgb().r},${tinycolor(color).toRgb().g},${tinycolor(color).toRgb().b};
                    `
                            )
                            .join('\n')
                    )
                    .join('\n')}
            
            ${csColors}
            
        --pure-white: white;
        --pure-black: black;
    }
</style>`;

// dark color scheme
const rootDark = `<style>
@media (prefers-color-scheme: dark) {
    :root {
        ${Object.entries(darkColorShadesArray)
            .map(([colorSet, shades]) =>
                Object.entries(shades)
                    .map(
                        ([shade, color]) => `
                    --${colorSet}-${shade}: ${tinycolor(color).toRgbString()};
                    --${colorSet}-${shade}-rgb: ${tinycolor(color).toRgb().r},${tinycolor(color).toRgb().g},${tinycolor(color).toRgb().b};
                    `
                    )
                    .join('\n')
            )
            .join('\n')}

        ${csColors}

        --pure-white: black;
        --pure-black: white;

    }
}

.dark {
        ${Object.entries(darkColorShadesArray)
            .map(([colorSet, shades]) =>
                Object.entries(shades)
                    .map(
                        ([shade, color]) => `
                    --${colorSet}-${shade}: ${tinycolor(color).toRgbString()};
                    --${colorSet}-${shade}-rgb: ${tinycolor(color).toRgb().r},${tinycolor(color).toRgb().g},${tinycolor(color).toRgb().b};
                    `
                    )
                    .join('\n')
            )
            .join('\n')}

        ${csColors}

        --pure-white: black;
        --pure-black: white;
    }
</style>`;


import fs from 'fs';
import path from 'path';

const outputPath = path.join('resources/css/variables.css');

fs.writeFileSync(outputPath, rootDefault+rootDark, 'utf8');