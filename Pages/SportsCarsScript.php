<script>
const buttons = document.querySelectorAll('.featured__item');
const articles = document.querySelectorAll('.featured__card');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const filter = button.getAttribute('data-filter');

    // Remove active class from all buttons
    buttons.forEach(btn => {
      btn.classList.remove('active-featured');
    });

    // Add active class to the clicked button
    button.classList.add('active-featured');

    // Show articles that match the filter and hide others
    articles.forEach(article => {
      if (filter === 'all') {
        article.classList.remove('hide');
      } else if (article.classList.contains(filter)) {
        article.classList.remove('hide');
      } else {
        article.classList.add('hide');
      }
    });
  });
});
</script>

<?php
// Define the featured brands
$featured_brands = ["Ferarri", "Lamborghini", "Bugati"];

// Get the filter value from the clicked button
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
} else {
    $filter = implode('', $featured_brands);
}
?>


<?php
// Get the filter value from the clicked button
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
} else {
    $filter = "all";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adms_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build the SQL query based on the filter value
if ($filter == "all") {
    $sql =
        "SELECT v.*, m.model, m.engine_type, m.transmission_type,
    b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
    on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
    on m.car_type_id = ct.id WHERE b.name IN ('" .
        implode("', '", $featured_brands) .
        "')";
} else {
    $sql = "SELECT v.*, m.model, m.engine_type, m.transmission_type,
    b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
    on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
    on m.car_type_id = ct.id WHERE b.name='$filter'";
}

// Execute the query
$result = mysqli_query($conn, $sql);

// Loop through the results and display them
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<article  class='featured__card mix " . strtolower($row['brand']) . "'>";
        echo "<div class='shape shape__smaller'></div>";
        echo "<h1 class='featured__title'>" . $row['brand'] . "</h1>";
        echo "<h3 class='featured__subtitle'>" . $row['model'] . "</h3>";
        echo "<img src='" . $row['Pic'] . "' alt='' class='featured__img'>";
        echo "<h3 class='featured__price'>" . number_format($row['price'], 2) . " AED</h3>";
        echo "<button class='button featured__button'>";
        echo "<i class='ri-shopping-bag-2-line'></i>";
        echo "</button>";
        echo "</article>";
    }
} else {
    echo "No results found.";
}

// Close the database connection
mysqli_close($conn);

?>
