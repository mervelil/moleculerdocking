document.getElementById("visualizeButton").addEventListener("click", function () {
    var pdbData = document.getElementById("pdbData").value;
    var viewer = $3Dmol.createViewer("viewerContainer", {backgroundColor: "white"});
    viewer.addModel(pdbData, "pdb");
    viewer.setStyle({}, {stick: {}});
    viewer.zoomTo();
    viewer.render();
});