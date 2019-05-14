<?php
$catalog = [];

//Books
$catalog[101] = [
	"title" => "A Design Patterns: Elements of Reusable Object-Oriented Software",
	"img" => "assets/img/media/design_patterns.jpg",
    "genre" => "Tech",
    "format" => "Paperback",
    "year" => 1994,
    "category" => "Books",
    "authors" => [
        "Erich Gamma",   //it needs the builtin implode() to fitin the conversion of the array to be displayed
        "Richard Helm",
        "Ralph Johnson",
        "John Vlissides"
    ],
    "publisher" => "Prentice Hall",
    "isbn" => '978-0201633610'
];
$catalog[102] = [
    "title" => "Clean Code: A Handbook of Agile Software Craftsmanship",
    "img" => "assets/img/media/clean_code.jpg",
    "genre" => "Tech",
    "format" => "Ebook",
    "year" => 2008,
    "category" => "Books",
    "authors" => [
        "Robert C. Martin"
    ],
    "publisher" => "Prentice Hall",
    "isbn" => '978-0132350884'
];
$catalog[103] = [
    "title" => "Refactoring: Improving the Design of Existing Code",
    "img" => "assets/img/media/refactoring.jpg",
    "genre" => "Tech",
    "format" => "Hardcover",
    "year" => 1999,
    "category" => "Books",
    "authors" => [
        "Martin Fowler",
        "Kent Beck",
        "John Brant",
        "William Opdyke",
        "Don Roberts"
    ],
    "publisher" => "Addison-Wesley Professional",
    "isbn" => '978-0201485677'
];
$catalog[104] = [
    "title" => "The Clean Coder: A Code of Conduct for Professional Programmers",
    "img" => "assets/img/media/clean_coder.jpg",
    "genre" => "Tech",
    "format" => "Audio",
    "year" => 2011,
    "category" => "Books",
    "authors" => [
        "Robert C. Martin"
    ],
    "publisher" => "Prentice Hall",
    "isbn" => '007-6092046981'
];
//Movies
$catalog[201] = [
    "title" => "Forrest Gump",
    "img" => "assets/img/media/forest_gump.jpg",
    "genre" => "Drama",
    "format" => "DVD",
    "year" => 1994,
    "category" => "Movies",
    "director" => "Robert Zemeckis",
    "writers" => [
        "Winston Groom",
        "Eric Roth"
    ],
    "stars" => [
        "Tom Hanks",
        "Rebecca Williams",
        "Sally Field",
        "Michael Conner Humphreys"
    ]
];
$catalog[202] = [
    "title" => "Office Space",
    "img" => "assets/img/media/office_space.jpg",
    "genre" => "Comedy",
    "format" => "Blu-ray",
    "year" => 1999,
    "category" => "Movies",
    "director" => "Mike Judge",
    "writers" => [
        "William Goldman"
    ],
    "stars" => [
        "Ron Livingston",
        "Jennifer Aniston",
        "David Herman",
        "Ajay Naidu",
        "Diedrich Bader",
        "Stephen Root"
    ]
];
$catalog[203] = [
    "title" => "The Lord of the Rings: The Fellowship of the Ring",
    "img" => "assets/img/media/lotr.jpg",
    "genre" => "Drama",
    "format" => "Blu-ray",
    "year" => 2001,
    "category" => "Movies",
    "director" => "Peter Jackson",
    "writers" => [
        "J.R.R. Tolkien",
        "Fran Walsh",
        "Philippa Boyens",
        "Peter Jackson"
    ],
    "stars" => [
        "Ron Livingston",
        "Jennifer Aniston",
        "David Herman",
        "Ajay Naidu",
        "Diedrich Bader",
        "Stephen Root"
    ]
];
$catalog[204] = [
    "title" => "The Princess Bride",
    "img" => "assets/img/media/princess_bride.jpg",
    "genre" => "Comedy",
    "format" => "DVD",
    "year" => 1987,
    "category" => "Movies",
    "director" => "Rob Reiner",
    "writers" => [
        "William Goldman"
    ],
    "stars" => [
        "Cary Elwes",
        "Mandy Patinkin",
        "Robin Wright",
        "Chris Sarandon",
        "Christopher Guest",
        "Wallace Shawn",
        "André the Giant",
        "Fred Savage",
        "Peter Falk",
        "Billy Crystal"
    ]
];
//Music
$catalog[301] = [
    "title" => "Beethoven: Complete Symphonies",
    "img" => "assets/img/media/beethoven.jpg",
    "genre" => "Clasical",
    "format" => "CD",
    "year" => 2012,
    "category" => "Music",
    "artist" => "Ludwig van Beethoven"
];
$catalog[302] = [
    "title" => "Elvis Forever",
    "img" => "assets/img/media/elvis_presley.jpg",
    "genre" => "Rock",
    "format" => "Vinyl",
    "year" => 2015,
    "category" => "Music",
    "artist" => "Elvis Presley"
];
$catalog[303] = [
    "title" => "No Fences",
    "img" => "assets/img/media/garth_brooks.jpg",
    "genre" => "Country",
    "format" => "Cassette",
    "year" => 1990,
    "category" => "Music",
    "artist" => "Garth Brooks"
];
$catalog[304] = [
    "title" => "The Very Thought of You",
    "img" => "assets/img/media/nat_king_cole.jpg",
    "genre" => "Jaz",
    "format" => "MP3",
    "year" => 2008,
    "category" => "Music",
    "artist" => "Nat King Cole"
];