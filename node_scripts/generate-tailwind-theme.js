const fs = require('fs');
const path = require('path');

const themeJsonPath = path.resolve(__dirname, '../theme/theme.json');
const outputCssPath = path.resolve(__dirname, '../tailwind/generated-theme.css');

console.log(`Reading theme colors from: ${themeJsonPath}`);

let themeJson;
try {
  themeJson = JSON.parse(fs.readFileSync(themeJsonPath, 'utf8'));
} catch (error) {
  console.error('Error reading or parsing theme.json:', error);
  process.exit(1); // Exit if theme.json can't be read
}

let cssContent = '/* Generated theme colors from theme.json */\n';
cssContent += '@theme {\n';
cssContent += '  --color-foreground: black; /* Default fallback */\n';
cssContent += '  --color-background: white; /* Default fallback */\n';
cssContent += '  --color-primary: #1a5632; /* Default UAB Green fallback */\n';

if (themeJson.settings && themeJson.settings.color && themeJson.settings.color.palette) {
  themeJson.settings.color.palette.forEach(color => {
    // Define colors as CSS custom properties for Tailwind v4
    // e.g., --color-uab-green: #1a5632;
    cssContent += `  --color-${color.slug}: ${color.color};\n`;

    // Set primary/foreground/background if slugs match
    if (color.slug === 'uab-green') { // Assuming uab-green is primary
        cssContent += `  --color-primary: var(--color-${color.slug});\n`;
    }
    if (color.slug === 'black') {
        cssContent += `  --color-foreground: var(--color-${color.slug});\n`;
    }
    if (color.slug === 'white') {
        cssContent += `  --color-background: var(--color-${color.slug});\n`;
    }
  });
} else {
  console.warn('Could not find color palette in theme.json. Using fallbacks.');
}

cssContent += '}\n';

try {
  fs.writeFileSync(outputCssPath, cssContent, 'utf8');
  console.log(`Successfully generated Tailwind theme CSS at: ${outputCssPath}`);
} catch (error) {
  console.error('Error writing generated theme CSS file:', error);
  process.exit(1);
} 