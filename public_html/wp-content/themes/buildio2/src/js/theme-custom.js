// File for your custom JavaScript
console.log("custom theme js code");

// 1. Import your SVGs 
import gen017Svg from '../vendor/duotone-icons/gen/gen017.svg';
import gen018Svg from '../vendor/duotone-icons/gen/gen018.svg';
import art009Svg from '../vendor/duotone-icons/art/art009.svg';


// 2. Store your imported SVGs and their respective container IDs in an array.
const icons = [
    { svg: gen017Svg, container: 'gen017Svg' },
    { svg: gen018Svg, container: 'gen018Svg' },
    { svg: art009Svg, container: 'art009Svg' },
    // ... add more icons as needed
];

document.addEventListener("DOMContentLoaded", function() {
    // 3. Loop through the array and inject the SVG content into the containers.
    icons.forEach(icon => {
        const containerElement = document.getElementById(icon.container);
        if (containerElement) {
            containerElement.innerHTML = icon.svg;
        }
    });
});
