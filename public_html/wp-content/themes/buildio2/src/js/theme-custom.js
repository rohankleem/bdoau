// File for your custom JavaScript
console.log("custom theme js code");

// 1. Import your SVGs 
import gen017Svg from '../vendor/duotone-icons/gen/gen017.svg';
import gen018Svg from '../vendor/duotone-icons/gen/gen018.svg';
import art009Svg from '../vendor/duotone-icons/art/art009.svg';
import ecm003Svg from '../vendor/duotone-icons/ecm/ecm003.svg';
import gra010Svg from '../vendor/duotone-icons/gra/gra010.svg';
import art002Svg from '../vendor/duotone-icons/art/art002.svg';
import gen020Svg from '../vendor/duotone-icons/gen/gen020.svg';
import map007Svg from '../vendor/duotone-icons/map/map007.svg';
import gen004Svg from '../vendor/duotone-icons/gen/gen004.svg';

// 2. Store your imported SVGs and their respective container IDs in an array.
const icons = [
    { svg: gen017Svg, container: 'gen017Svg' }, // cube
    { svg: gen018Svg, container: 'gen018Svg' }, // map marker
    { svg: art009Svg, container: 'art009Svg' }, // curl up graph
    { svg: ecm003Svg, container: 'ecm003Svg' }, // percentage tag
    { svg: gra010Svg, container: 'gra010Svg' }, // pie chart
    { svg: art002Svg, container: 'art002Svg' }, // measuring sticks
    { svg: gen020Svg, container: 'gen020Svg' }, // trophy
    { svg: map007Svg, container: 'map007Svg' }, // target
    { svg: gen004Svg, container: 'gen004Svg' }, // magnifying glass
    // ... add more icons as needed
];

document.addEventListener("DOMContentLoaded", function() {
    // 3. Loop through the array and inject the SVG content into the containers.
    icons.forEach(icon => {
        const containerElements = document.getElementsByClassName(icon.container);
        if (containerElements.length > 0) {
            for (let i = 0; i < containerElements.length; i++) {
                containerElements[i].innerHTML = icon.svg;
            }
        }
    });
});
