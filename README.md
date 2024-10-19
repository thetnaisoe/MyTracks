
# PetCatalogue API (Laravel)

This is the backend API for the PetCatalogue application. It is built with Laravel and uses a SQLite database to store information about pets. The API handles CRUD (Create, Read, Update, Delete) operations for managing pets in the catalogue.

## Features

- **RESTful API** to manage pets in the catalogue.
- **SQLite database** for data storage.
- **Database seeding** for initial data population.
- Full **CRUD operations** (Create, Read, Update, Delete) for the `pets` resource.

## Requirements

- **PHP >= 7.3**
- **Laravel >= 8.x**
- **Composer** (for managing PHP dependencies)

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/your-username/pet-catalogue.git
cd pet-catalogue/server
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Set Up the Environment

- Create an `.env` file from the example:

```bash
cp .env.example .env
```

- Set up the database configuration in the `.env` file. Use SQLite as the database engine:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
```

- Create the `database.sqlite` file inside the `database` folder:

```bash
touch database/database.sqlite
```

### 4. Run Migrations and Seed the Database

```bash
php artisan migrate --seed
```

This command will create the necessary database tables and seed the database with some initial pet data.

### 5. Run the Application

You can start the Laravel development server by running:

```bash
php artisan serve
```

The API will be available at [http://localhost:8000](http://localhost:8000).

### API Endpoints

- `GET /api/pets` - List all pets.
- `GET /api/pets/{id}` - Get details of a specific pet.
- `POST /api/pets` - Add a new pet.
- `PUT /api/pets/{id}` - Update an existing pet.
- `DELETE /api/pets/{id}` - Delete a pet.

## Additional Commands

- **Run tests**: `php artisan test`
- **Clear cache**: `php artisan cache:clear`

## License

This project is licensed under the MIT License.
