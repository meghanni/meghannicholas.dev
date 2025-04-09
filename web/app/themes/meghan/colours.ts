// colorGenerator.ts
import tinycolor from 'tinycolor2';

const base = '#2facd2';
const bright = '#ee43a1';
const health = '#b48686';
const colour = base

/**180 spin for complementary 120 and -120 for triadic colours */
const primary = tinycolor(colour).saturate(10).lighten(0).toHexString();
const secondary = tinycolor(primary).spin(180).toHexString();
const grey = tinycolor(primary).saturate(100).desaturate(95).toHexString();


// Export the color shades for light mode
const lightColorShadesArray = {
  primary: generateTailwindColorsOK(primary, false, 'light'),
  secondary: generateTailwindColorsOK(secondary, false, 'light'),
  grey: generateTailwindColorsOK(grey, false, 'light'),
};

// Export the color shades for dark mode
const darkColorShadesArray = {
  primary: generateTailwindColorsOK(primary, false, 'dark'),
  secondary: generateTailwindColorsOK(secondary, false, 'dark'),
  grey: generateTailwindColorsOK(grey, false, 'dark'),
};

/**Edit which colours map to the cs colour vars here */
const csColors = `        
        --primary: var(--primary-500);
        --primaryLight: var(--primary-200);
        --secondary: var(--secondary-500);
        --secondaryLight: var(--secondary-200);
        --white: var(--secondary-10);
        --white-light: var(--secondary-10-light);
        --white-rgb: var(--secondary-10-rgb);
        --black: var(--secondary-950);
        --black-light: var(--secondary-950-light);
        --black-rgb: var(--secondary-950-rgb);
        --headerColor: var(--primary-950);
        --headerColorWhite: var(--primary-10);
        --bodyTextColor: var(--primary-900);
        --bodyTextColorWhite: var(--primary-50);

        --shadow-sm: 0 1px 3px 0 rgba(var(--primary-950-rgb),.1), 0 1px 2px -1px rgba(var(--primary-950-rgb),.1);
        --shadow-md: 0 4px 6px -1px rgba(var(--primary-950-rgb),.1), 0 2px 4px -2px rgba(var(--primary-950-rgb),.1);
        --shadow-lg: 0 10px 15px -3px rgba(var(--primary-950-rgb),.1), 0 4px 6px -4px rgba(var(--primary-950-rgb),.1);
        --shadow-xl: 0 20px 25px -5px rgba(var(--primary-950-rgb),.1), 0 8px 10px -6px rgba(var(--primary-950-rgb),.1);
        --shadow-2xl: 0 25px 50px -12px rgba(var(--primary-950-rgb),.25);

        --grad: linear-gradient(to bottom, var(--primary-200), var(--primary-300));
        `;

export { lightColorShadesArray, darkColorShadesArray, csColors };

import { parse, formatHex, oklch, interpolate } from 'culori'; // Ensure you have the correct imports

function generateTailwindColorsOK(baseColor: string, halfShades = false, mode = 'light') {
  const targetLightness = 0.5;
  let baseOklchColor = oklch(parse(baseColor));
  baseOklchColor.l = targetLightness; // Adjust the base color to match the target lightness

  // Define the shades to be generated
  let shades = [10, 50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950];
  if (halfShades) shades = [...shades, 150, 250, 350, 450, 550, 650, 750, 850].sort((a, b) => a - b);

  // Generate the shades
  let result: { [key: number]: string } = {};
  const interpolateToBlack = interpolate([baseOklchColor, oklch({ l: 0, c: 0, h: baseOklchColor.h })]);
  const interpolateToWhite = interpolate([baseOklchColor, oklch({ l: 1, c: 0, h: baseOklchColor.h })]);

  for (let shade of shades) {
    const originalShade = shade;

    let isDarkShade = shade > 500;
    if (isDarkShade) shade -= 500;

    const percentage = (shade / 500); // Convert to fraction

    if (isDarkShade) {
      result[originalShade] = formatHex(interpolateToBlack(percentage));
    } else {
      result[originalShade] = formatHex(interpolateToWhite(1 - percentage));
    }
  }

  // Reverse the shades for dark mode
  if (mode === 'dark') {
    let reversedShades = shades.slice().reverse();
    let swappedResult: { [key: number]: string } = {};
    for (let i = 0; i < shades.length; i++) {
      swappedResult[shades[i]] = result[reversedShades[i]];
    }
    result = swappedResult;
  }

  return result;
}

function generateTailwindColorsHex(baseColor: any, halfShades = false, mode = 'light') {
  const targetLightness = 0.5;
  let baseTinyColor = tinycolor(baseColor).toHsl();
  baseTinyColor.l = targetLightness; // Adjust the base color to match the target lightness
  baseTinyColor = tinycolor(baseTinyColor);

  // Define the shades to be generated
  let shades = [10, 50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950];
  if (halfShades) shades = [...shades, 150, 250, 350, 450, 550, 650, 750, 850].sort((a, b) => a - b);

  // Generate the shades
  let result = {};
  for (let shade of shades) {
    const originalShade = shade;

    let isDarkShade = shade > 500;
    if (isDarkShade) shade -= 500;

    const percentage = (shade / 500) * 100; // Convert to percentage

    if (isDarkShade) {
      result[originalShade] = tinycolor.mix(baseTinyColor, tinycolor('black'), percentage).toRgb();
    } else {
      result[originalShade] = tinycolor.mix(baseTinyColor, tinycolor('white'), 100 - percentage).toRgb();
    }
  }

  // Reverse the shades for dark mode
  if (mode === 'dark') {
    let reversedShades = shades.slice().reverse();
    let swappedResult = {};
    for (let i = 0; i < shades.length; i++) {
      swappedResult[shades[i]] = result[reversedShades[i]];
    }
    result = swappedResult;
  }

  return result;
}