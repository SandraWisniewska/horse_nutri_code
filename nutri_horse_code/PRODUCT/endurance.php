<?php include '../INCLUDES/head.html'; ?>
<br><br><br>
<div class="photo-container">
        <img src="../photo/endurance.jpg" class="left-element">
        <div class="right-element">
            <div class="calculator-container">
                <h1>Oblicz wartości odżywcze Bonutron ENDURANCE</h1>
                <label for="productWeight">Podaj wagę produktu (w gramach):</label>
                <input type="number" id="productWeight" placeholder="Waga w gramach" required>
                <button onclick="calculate_endurance()">Oblicz</button>
                <br>
                <div id="resultContainer"></div>
        </div>
    </div>
</div>
    <br><br><br>
<?php include '../INCLUDES/footer.html'; ?>
