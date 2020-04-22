<head>
    <meta charset="UTF-8">
    <title>Formulaire d'upload de fichiers</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Upload Fichier</h2>
    <label for="fileUpload">Fichier:</label>
    <input type="file" name="photo[]" multiple="multiple" id="fileUpload">
    <button type="submit" name="submit" value="Upload">Envoyer !</button>
    <p><strong>Note:</strong> Seuls les formats .jpg, .png, .gif, sont autorisés jusqu'à une taille maximale de 1 Mo.
    </p>
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["photo"])) {
        $allowed = array("jpg" => "image/jpg", "png" => "image/png", "gif" => "image/gif",);

        foreach ($_FILES['photo']['name'] as $key => $value) {
            $countError = 0;
            $fileName = $_FILES["photo"]["name"][$key];
            $fileType = $_FILES["photo"]["type"][$key];
            $fileSize = $_FILES["photo"]["size"][$key];
            $fileError = $_FILES["photo"]["error"][$key];
            $fileTmp = $_FILES["photo"]["tmp_name"][$key];


            if ($fileError === 0) {
                // VERIFIE L'EXTENSION DU FICHIER
                $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)) {
                    echo "Erreur : Veuillez séléctionner un format de fichier valide.";
                    $countError++;
                }
                // VERIFIE LA TAILLE DU FICHIER - 1Mo MAXIMUM
                $maxsize = 1000000;
                if ($fileSize > $maxsize) {
                    echo "Erreur : La taille du fichier est supérieur à la limite autorisé (1Mo)";
                    $countError++;
                }
                if ($countError == 0) {
                    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                    $fileName = uniqid() . '.' . $extension;

                    move_uploaded_file($fileTmp, "uploads/" . $fileName);
                    echo "Votre photo a été téléchargé avec succès.";
                }
            } else {
                echo "Erreur : Il y a eu un problème de téléchargement de votre photo. Veuillez réessayer.";
            }
        }
    }
}

$it = new FilesystemIterator(dirname("uploads/."));
foreach ($it as $fileinfo) {
    echo "<figure><img src=" . $fileinfo->getPathname() . "><figcaption>" . $fileinfo->getFilename() .
        "</figcaption></figure>";
}









