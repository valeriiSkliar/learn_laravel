SELECT laravel_project.categories.title
FROM laravel_project.pets
INNER JOIN laravel_project.categories ON laravel_project.pets.species = laravel_project.categories.id;