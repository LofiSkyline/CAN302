// This file contains JavaScript code to draw a simple Christmas tree on the webpage.

document.addEventListener("DOMContentLoaded", function() {
    const treeContainer = document.createElement('div');
    treeContainer.classList.add('tree-container');
    document.body.appendChild(treeContainer);

    const treeHeight = 5; // Number of layers of the tree
    for (let i = 0; i < treeHeight; i++) {
        const layer = document.createElement('div');
        layer.classList.add('tree-layer');
        layer.style.width = `${(treeHeight - i) * 20}px`; // Decrease width for each layer
        layer.style.marginLeft = `${(treeHeight - i) * 10}px`; // Center the layer
        layer.style.backgroundColor = 'green';
        layer.style.height = '30px';
        layer.style.borderRadius = '10px';
        treeContainer.appendChild(layer);
    }

    const trunk = document.createElement('div');
    trunk.classList.add('tree-trunk');
    trunk.style.width = '20px';
    trunk.style.height = '30px';
    trunk.style.backgroundColor = 'saddlebrown';
    trunk.style.marginLeft = '40px'; // Center the trunk
    treeContainer.appendChild(trunk);
});