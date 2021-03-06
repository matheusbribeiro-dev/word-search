CREATE TABLE IF NOT EXISTS user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (email)
);

CREATE TABLE IF NOT EXISTS user_word (
    user_id INT UNSIGNED NOT NULL,
    word_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (user_id, word_id)
);

CREATE TABLE IF NOT EXISTS word (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    word VARCHAR(50) NOT NULL,
    meaning VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (word)
);