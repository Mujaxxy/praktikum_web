<?php
$A = array(
    'a','b','c','d','e','f','g','h','i','j',
    'k','l','m','n','o','p','q','r','s','t',
    'u','v','w','x','y','z',
    'A','B','C','D','E','F','G','H','I','J',
    'K','L','M','N','O','P','Q','R','S','T',
    'U','V','W','X','Y','Z',
    '0','1','2','3','4','5','6','7','8','9'
);

$B = array(
    'q','7','M','z','1','A','x','b','R','9',
    'c','T','k','H','p','3','W','n','J','e',
    '6','L','y','G','!','@',
    '2','v','F','8','u','B','d','Q','4','s',
    'Y','i','Z','o','N','m','C','j','V','l',
    'X','t','P','h','K','w',
    '#','$','%','^','&','*','(',')','-','+'
);

$AB = array_combine($A, $B);
$BA = array_combine($B, $A);

$teks = isset($_POST['teks']) ? $_POST['teks'] : 'Halo123';
$mode = isset($_POST['mode']) ? $_POST['mode'] : 'enkripsi';

$hasil = "";
for ($i = 0; $i < strlen($teks); $i++) {
    $char = $teks[$i];
    if ($mode == 'enkripsi') {
        $hasil .= isset($AB[$char]) ? $AB[$char] : $char;
    } else {
        $hasil .= isset($BA[$char]) ? $BA[$char] : $char;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Enkripsi Substitusi</title>
</head>
<body>
    <h2>Program Enkripsi Substitusi</h2>
    <form method="POST">
        <p>
            <label>Teks Input:</label><br>
            <input type="text" name="teks" value="<?php echo htmlspecialchars($teks); ?>" size="40">
        </p>
        <p>
            <label>Mode:</label><br>
            <input type="radio" name="mode" value="enkripsi" <?php echo $mode == 'enkripsi' ? 'checked' : ''; ?>> Enkripsi &nbsp;
            <input type="radio" name="mode" value="dekripsi" <?php echo $mode == 'dekripsi' ? 'checked' : ''; ?>> Dekripsi
        </p>
        <input type="submit" value="Proses">
    </form>
    <hr>
    <p><b>Teks Asli &nbsp;:</b> <?php echo htmlspecialchars($teks); ?></p>
    <p><b><?php echo $mode == 'enkripsi' ? 'Enkripsi' : 'Dekripsi'; ?> :</b> <?php echo htmlspecialchars($hasil); ?></p>
</body>
</html>
