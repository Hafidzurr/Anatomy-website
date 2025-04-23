# Website Project

Dalam rancangan yang lebih detail, kita akan mendefinisikan elemen-elemen HTML, gaya CSS, dan skrip JavaScript yang akan digunakan dalam website pencatatan makanan dan minuman harian.

**index.html**:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daily Food and Drink Tracker</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <h1>Daily Food and Drink Tracker</h1>
    </header>
    <main>
      <section id="input-section">
        <h2>Input Data</h2>
        <form id="food-form">
          <label for="food-name">Nama Makanan:</label>
          <input type="text" id="food-name" required />
          <label for="calories">Kalori:</label>
          <input type="number" id="calories" required />
          <label for="meal-time">Waktu Makan:</label>
          <input type="time" id="meal-time" required />
          <button type="submit">Tambahkan</button>
        </form>
      </section>
      <section id="tracker-section">
        <h2>Catatan Harian</h2>
        <table>
          <thead>
            <tr>
              <th>Nama Makanan</th>
              <th>Kalori</th>
              <th>Waktu</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="food-list">
            <!-- Data makanan dan minuman akan ditampilkan di sini -->
          </tbody>
        </table>
        <p>Total Kalori: <span id="total-calories">0</span></p>
      </section>
    </main>
    <script src="script.js"></script>
  </body>
</html>
```

**style.css** (Anda dapat menyesuaikan gaya sesuai keinginan):

```css
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #3498db;
  color: #fff;
  text-align: center;
  padding: 1rem 0;
}

main {
  max-width: 800px;
  margin: 0 auto;
  padding: 1rem;
}

h2 {
  color: #333;
}

form {
  display: grid;
  gap: 10px;
  margin-top: 10px;
}

label {
  font-weight: bold;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table,
th,
td {
  border: 1px solid #ddd;
  text-align: left;
}

th,
td {
  padding: 8px;
}

button {
  background-color: #3498db;
  color: #fff;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
}

button:hover {
  background-color: #2980b9;
}
```

**script.js** (JavaScript untuk menangani input dan tampilan):

```javascript
document.addEventListener("DOMContentLoaded", function () {
  const foodForm = document.getElementById("food-form");
  const foodList = document.getElementById("food-list");
  const totalCalories = document.getElementById("total-calories");

  let foods = [];

  foodForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const foodName = document.getElementById("food-name").value;
    const calories = parseFloat(document.getElementById("calories").value);
    const mealTime = document.getElementById("meal-time").value;

    if (foodName && calories && mealTime) {
      const food = {
        name: foodName,
        calories: calories,
        time: mealTime,
      };

      foods.push(food);
      updateFoodList();
      foodForm.reset();
    }
  });

  function updateFoodList() {
    foodList.innerHTML = "";
    let total = 0;

    foods.forEach(function (food, index) {
      const row = document.createElement("tr");
      row.innerHTML = `
                <td>${food.name}</td>
                <td>${food.calories}</td>
                <td>${food.time}</td>
                <td><button onclick="removeFood(${index})">Hapus</button></td>
            `;
      foodList.appendChild(row);

      total += food.calories;
    });

    totalCalories.textContent = total;
  }

  window.removeFood = function (index) {
    foods.splice(index, 1);
    updateFoodList();
  };
});
```

Dengan rancangan ini, Anda memiliki halaman web yang sederhana untuk mencatat makanan dan minuman harian. Anda dapat mengembangkan lebih lanjut dengan menambahkan fitur-fitur seperti penyimpanan data ke penyimpanan lokal, mengedit catatan, atau mungkin menampilkan statistik harian.
