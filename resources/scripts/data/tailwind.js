import resolveConfig from 'tailwindcss/resolveConfig';
import tailwindConfig from '@scripts/../../tailwind.config.js';

const fullConfig = resolveConfig(tailwindConfig);

const breakpoints = fullConfig.theme.screens;

for (const key of Object.keys(breakpoints)) {
    breakpoints[key] = breakpoints[key].replace('px', '');
}

export {breakpoints};