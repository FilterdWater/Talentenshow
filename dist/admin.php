<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "talentshow";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talentenshow | Admin</title>

    <link rel="stylesheet" href="output.css"></head>

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">

<body>
<header class="absolute inset-x-0 top-0 z-50">
        <nav class="fixed top-0 w-full flex items-center justify-between p-3 lg:px-8 bg-gray-50" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Logo</span>
              <div class="font-semibold select-none">✨ TalentenShow 2023 ✨</div>
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a href="index.html" class="font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none">Home</a>
            <a href="aanmelden.html" class="font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900">Aanmelden</a>
            <a href="reserveren.html" class="font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900">Reserveer</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="info.html" class="text-sm font-semibold leading-6 text-gray-900">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg>
            </a>
            <a href="admin.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 border-b-2 border-purple-600 hover:border-current cursor-pointer select-none text-gray-900">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>   
            </a>           
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-50"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Logo</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-auto">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="index.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-purple-600 hover:border-current cursor-pointer select-none text-gray-900">Home</a>
                  <a href="reserveren.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900">Aanmelden</a>
                  <a href="aanmelden.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900">Reserveer</a>
                </div>
                <div class="py-6">
                  <a href="info.html" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                  </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


    <div class="px-3">
        <div class="flex justify-between">
            <div class="p-4 border-2 border-gray-50 mt-16">
              <h1 class="text-xl font-bold">Deelnemers</h1>
              <p class="text-gray-600">Een lijst van alle deelnemers die zich hebben ingeschreven</p>
            </div>
            <div class="p-4 flex items-end">
            </div>
          </div>
          
        <div class="flex-grow border-2">
          <div class="flex flex-col">
            <table class="min-w-full">
              <thead class="text-left">
                <tr class="bg-gray-100">
                  <th scope="col" class="font-bold">Voornaam</th>
                  <th scope="col" class="font-bold">Achternaam</th>
                  <th scope="col" class="font-bold">E-mail</th>
                  <th scope="col" class="font-bold">Telefoon nummer</th>
                </tr>
              </thead>
              <tbody>


              <?php
                $sql = "SELECT first_name, last_name, email, telefoon_nummer FROM deelnemers";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-4 py-2'>" . $row["first_name"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row["last_name"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row["email"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row["telefoon_nummer"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No deelnemers found.</td></tr>";
                }

                ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="mt-12 px-3 mb-10">

        <div class="flex justify-between">
            <div class="p-4 border-2 border-gray-50">
              <h1 class="text-xl font-bold">Bezoekers</h1>
              <p class="text-gray-600">Iedereen die een kaartje hebben gereserveerd</p>
            </div>
          </div>
          
        <div class="flex-grow border-2 border-gray-300">
          <div class="flex flex-col">
            <table class="min-w-full">
              <thead class="text-left">
                <tr class="bg-gray-100">
                  <th scope="col" class=" font-bold">Voornaam</th>
                  <th scope="col" class=" font-bold">Achternaam</th>
                  <th scope="col" class=" font-bold">E-mail</th>
                  <th scope="col" class=" font-bold">Id</th>
                </tr>
              </thead>
              <tbody>


              <?php
                $sql = "SELECT first_name, last_name, email, id FROM aanwezigen";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-4 py-2'>" . $row["first_name"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row["last_name"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row["email"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row["id"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No deelnemers found.</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
