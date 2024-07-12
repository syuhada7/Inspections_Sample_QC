<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika input pada Form A berubah
            $('#formA input').on('input', function() {
                // Ambil waktu saat ini
                var currentTime = new Date().toLocaleTimeString();

                // Isi waktu ke input pada Form B
                $('#formB input[name="time"]').val(currentTime);
            });
        });
    </script>
</head>

<body>
    <!-- Form A -->
    <form id="formA">
        <label for="inputA">Input A:</label>
        <input type="text" name="inputA" id="inputA" />
    </form>

    <!-- Form B -->
    <form id="formB">
        <label for="time">Time:</label>
        <input type="text" name="time" id="time" readonly />
    </form>
</body>

</html>