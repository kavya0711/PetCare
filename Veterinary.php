
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets\css\veterinary style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/pet.png">
    <style>
        *::selection {
            background-color: #3d3d3d;
            color: whitesmoke;
        }
    </style>
</head>
<body style="background-color: rgb(251, 245, 235);">
    <main>
        <section class="heroo">
            <div class="hero-container">
                <h1>Your Pet. Our Care</h1>
                <div class="hero-buttons">
                    <a href="#petprod"><button>Pet Care</button></a>
                    <a href="#vet-booking-form"><button>Book a Vet</button></a>
                </div>
            </div>
        </section>

        <section class="book-vet">
            <h2>Book a Vet</h2>
            <p>Expert care for your pet's lifelong health journey Give your pet the gift of good health with a visit to our veterinary clinic</p>
            <div id="vet-booking-form">
                <h2>Vet booking Application</h2>
                <form action="vetbooking.php" method="post">
                <div class="form-group">

                     <label for="pet_id">Pet's id:</label>
        <input type="text" id="pet_id" name="pet_id" required>
    </div>
    <div class="form-group">
        <label for="petName">Pet's Name:</label>
        <input type="text" id="petName" name="petName" required>
    </div>
                <div class="form-group">
                    <label for="ownerName">Owner's Name:</label>
                    <input type="text" id="ownerName" name="ownerName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="loc">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="appointmentDate">appointmentDate:</label>
                    <input type="date" id="appointmentDate" name="appointmentDate" required>
                </div>
                <div class="form-group">
                    <label for="appointmentTime">appointmentTime:</label>
                    <input type="time" id="appointmentTime" name="appointmentTime" required>
                </div>
                <div class="form-group">
                    <label for="reason">Reason for Visit:</label>
                    <textarea id="reason" name="reason" rows="3"></textarea>
                </div>
                <button type="submit" class="btn">Book Appointment</button>
            </form>
        </section>

        <section class="pet-products">
            <h2 id="petprod">Pet Product Recommendations</h2>
            <div class="product-grid">
                <div class="product-card">
                    <a href="https://www.amazon.in/PAPA-PAWSOME-Conditioner-Ingredients-Anti-Itching/dp/B07QWV6J9F/ref=sr_1_3_sspa?sr=8-3-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY" target="_blank"><img src="assets\images\shampoo.png" alt="Product 1"></a>
                    <h3>Dog Shampoo</h3>
                    <p>Antimicrobial, Anti-Fungal, Anti-Itch, Cleansing, and Nourishing Shampoo</p>
                    <a href="https://www.amazon.in/PAPA-PAWSOME-Conditioner-Ingredients-Anti-Itching/dp/B07QWV6J9F/ref=sr_1_3_sspa?sr=8-3-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY" target="_blank" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <a href="https://www.amazon.in/Bathright-Lavender-Multipurpose-Anti-Bacterial-Deodorizing/dp/B0BD7N6R47/ref=sr_1_46?sr=8-46" target="_blank"><img src="assets\images\wipes.png" alt="Product 2"></a>
                    <h3>Pet Wipes</h3>
                    <p>Aloe Vera Fresh Wet Wipes for Cleaning & Deodorizing for Cats and Dogs</p>
                    <a href="https://www.amazon.in/Bathright-Lavender-Multipurpose-Anti-Bacterial-Deodorizing/dp/B0BD7N6R47/ref=sr_1_46?sr=8-46" target="_blank" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <a href="https://www.amazon.in/Bark-Out-Loud-Vivaldis-Multivitamins/dp/B09TTNHD1H/ref=sr_1_57_sspa?sr=8-57-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9idGY" target="_blank"><img src="assets\images\chewstix.png" alt="Product 3"></a>
                    <h3>Immunity Chewstix</h3>
                    <p>Boost Health & Vitality with Omega & Zinc for Dogs & Cats of All Life Stages</p>
                    <a href="https://www.amazon.in/Bark-Out-Loud-Vivaldis-Multivitamins/dp/B09TTNHD1H/ref=sr_1_57_sspa?sr=8-57-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9idGY" target="_blank" class="btn">Buy Now</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
