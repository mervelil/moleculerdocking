<?php
$pdbID = "1XYZ"; // PDB ID'sini buraya girin
$pdbURL = "https://files.rcsb.org/download/{$pdbID}.pdb";

$pdbData = file_get_contents($pdbURL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PDB Viewer</title>
</head>
<body>
    <h1>PDB Viewer</h1>
    <textarea id="pdbData" style="width: 80%; height: 300px;"><?php echo $pdbData; ?></textarea>
    <button id="visualizeButton">Visualize</button>
    <div id="viewerContainer"></div>
    
    <script src="viewer.js"></script>
</body>
</html>