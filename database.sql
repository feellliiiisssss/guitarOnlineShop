CREATE TABLE user (
  id INTEGER PRIMARY KEY,
  name TEXT,
  email TEXT,
  password TEXT,
  created_at BIGINT
);

CREATE TABLE item (
    id INTEGER PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(200) NOT NULL,
    image VARCHAR(200) NOT NULL,
    price NUMERIC(10,2) NOT NULL,
    created_at BIGINT
);

CREATE TABLE sell(
    id INTEGER PRIMARY KEY,
    user_id INTEGER NOT NULL REFERENCES user(id),
    phone_number VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    address VARCHAR(200) NOT NULL,
    postal_code VARCHAR(10) NOT NULL,
    item_count INTEGER NOT NULL,
    total_price INTEGER NOT NULL,
    created_at BIGINT
);

CREATE TABLE sell_item(
    id INTEGER PRIMARY KEY,
    sell_id INTEGER NOT NULL REFERENCES sell(id),
    item_id INTEGER NOT NULL REFERENCES item(id),
    qty INTEGER NOT NULL,
    price INTEGER NOT NULL,
    total_price INTEGER NOT NULL
);