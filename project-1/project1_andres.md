## Pet Sanctuary

# Species Table

- species_id (Primary Key)
- species_name
- price

# Breeds Table

- breeds_id (Primary Key)
- breed_name
- is_mixed
- price
- species_id (Foreign Key)(i placed this key here to link it between the breeds table and the species one)

# Pets table

- pets_id (Primary Key)
- pets_age
- pets_gender
- pets_neutered
- price
- breeds_id (Foreign Key)(i placed this key here to link it between the pets table and the breeds table)

# Toys Table

- toys_id (Primary Key)
- toy_name
- price