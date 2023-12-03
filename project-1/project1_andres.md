## Pet Sanctuary

# Pets table

- pets_id (Primary Key)
- pets_name
- pets_age
- pets_gender
- pets_neutered
- pets_price
- species_id (Foreign Key)
- breeds_id (Foreign Key)(i placed this key here to link it between the pets table and the breeds table)
- toys_id (foreign key)

# Species Table

- species_id (Primary Key)
- species_name
- species_price

# Breeds Table

- breeds_id (Primary Key)
- breeds_name
- breeds_is_mixed
- breeds_price
- species_id (Foreign Key)(i placed this key here to link it between the breeds table and the species one)

# Toys Table

- toys_id (Primary Key)
- toys_name
- toys_price