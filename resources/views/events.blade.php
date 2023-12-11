<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brenna</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <section class="sec1">

        <div class="tambal"> <!--nambal skew putih-->
            <header class="nav-bar"> <!--skew kuning asli-->
                <div class="wrapper"> <!--skew kuning bawah-->
                    <h1 class="title">
                        <img src="{{ asset('images/brennaLogo.png') }}" alt="logo">
                        <a href="/">BRENNA SIGNATURE</a>
                    </h1>

                    <nav>
                        <ul class="nav-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="/events">Events</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="/team">Team</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li>
                                <button class="button" onclick="window.location.href='https://api.whatsapp.com/send?phone=6281312312312&text=Send20%a20%quote'">Contact Whatsapp</button>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="big-title">
                    <p>EVENT PLANNER</p>
                </div>

        </div>
        </header>

        <div class="events">
            <div class="add-event"><button id="addBtn">Add Event</button></div>
            <table>
                <thead>
                    <tr>
                        <th>Hero</th>
                        <th>Event Name</th>
                        <th>Team</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="row1">
                        <td>Nama Hero</td>
                        <td>New Year's Party</td>
                        <td>12-12-2023</td>
                        <td><img src="https://images.unsplash.com/photo-1567596900894-00ff726f8de7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="team" class="team-img">
                            <p>Nama Team</p>
                        </td>
                        <td>
                            <button class="edit-btn" id="editBtn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr id="row1">
                        <td>Nama Hero</td>
                        <td>New Year's Party</td>
                        <td>12-12-2023</td>
                        <td><img src="https://images.unsplash.com/photo-1567596900894-00ff726f8de7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="team" class="team-img">
                            <p>Nama Team</p>
                        </td>
                        <td>
                            <button class="edit-btn" id="editBtn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>

        </div>

        <div class="modal" id="addModal">
            <div class="modal-content">
                <h2>Add Event</h2>
                <!-- Form -->
                <form id="addForm">
                    <!-- Form elements (hero, event, tanggal, team, foto) go here -->
                    <label for="hero">Hero:</label>
                    <input type="text" id="hero" name="hero" required>

                    <label for="event">Event:</label>
                    <input type="text" id="event" name="event" required>

                    <label for="date">Date:</label>
                    <input type="date" id="tanggal" name="tanggal" required>

                    <label for="team">Team:</label>
                    <input type="text" id="team" name="team" required>

                    <label for="team image">Team Image:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required>

                    <div class="button-container">
                        <button type="submit" class="edit-btn">Add</button>
                        <button type="button" onclick="closeaddModal()" class="cancel-btn" id="addcloseBtn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal" id="myModal">
            <div class="modal-content">
                <h2>Edit Event</h2>
                <!-- Form -->
                <form id="myForm">
                    <!-- Form elements (hero, event, tanggal, team, foto) go here -->
                    <label for="hero">Hero:</label>
                    <input type="text" id="hero" name="hero" required>

                    <label for="event">Event:</label>
                    <input type="text" id="event" name="event" required>

                    <label for="date">Date:</label>
                    <input type="date" id="tanggal" name="tanggal" required>

                    <label for="team">Team:</label>
                    <input type="text" id="team" name="team" required>

                    <label for="team image">Team Image:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required>

                    <div class="button-container">
                        <button type="submit" class="edit-btn">Edit</button>
                        <button type="button" onclick="closeModal()" class="cancel-btn" id="closeBtn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal-delete" id="deleteModal">
            <div class="modal-delete-content">
                <h2>Delete Event</h2>
                <p>Are you sure you want to delete this event?</p>
                <button class="delete-confirm-btn" onclick="deleteEvent()">Yes, Delete</button>
                <button class="delete-cancel-btn" onclick="closeDeleteModal()">Cancel</button>
            </div>
        </div>

        <script src="script.js"></script>
        <script>
            // For "Add Event" modal
            var addBtn = document.getElementById("addBtn");
            var addModal = document.getElementById("addModal");
            var addCloseBtn = document.getElementById("addcloseBtn");

            function closeAddModal() {
                addModal.style.display = "none";
            }

            addBtn.addEventListener("click", function() {
                addModal.style.display = "block";
            });

            addCloseBtn.addEventListener("click", function() {
                closeAddModal();
            });

            window.addEventListener("click", function(event) {
                if (event.target == addModal) {
                    closeAddModal();
                }
            });

            var addForm = document.getElementById("addForm");
            addForm.addEventListener("submit", function(event) {
                event.preventDefault();
                // Handle form submission logic here
                closeAddModal();
            });

            // For "Edit Event" modal
            var editBtns = document.querySelectorAll(".edit-btn");
            var editModal = document.getElementById("myModal");
            var closeEditBtn = document.getElementById("closeBtn");

            function closeEditModal() {
                editModal.style.display = "none";
            }

            editBtns.forEach(function(editBtn) {
                editBtn.addEventListener("click", function() {
                    editModal.style.display = "block";
                });
            });

            closeEditBtn.addEventListener("click", function() {
                closeEditModal();
            });

            window.addEventListener("click", function(event) {
                if (event.target == editModal) {
                    closeEditModal();
                }
            });

            var editForm = document.getElementById("myForm");
            editForm.addEventListener("submit", function(event) {
                event.preventDefault();
                // Handle form submission logic here
                closeEditModal();
            });

            // For delete confirmation modal
            var deleteBtns = document.querySelectorAll(".delete-btn");

            function openDeleteModal() {
                var deleteModal = document.getElementById("deleteModal");
                deleteModal.style.display = "block";
            }

            function closeDeleteModal() {
                var deleteModal = document.getElementById("deleteModal");
                deleteModal.style.display = "none";
            }

            function deleteEvent() {
                // Handle the delete logic here
                // You can use AJAX to send a request to the server for actual deletion
                closeDeleteModal();
            }

            deleteBtns.forEach(function(deleteBtn) {
                deleteBtn.addEventListener("click", function() {
                    openDeleteModal();
                });
            });
        </script>


</body>

</html>