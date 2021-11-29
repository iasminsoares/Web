CREATE DATABASE sistema;

CREATE TABLE produtos (
  id int(11) NOT NULL,
  descricao varchar(200) NOT NULL,
  preco float NOT NULL,
  foto varchar(150) NOT NULL
);

INSERT INTO produtos (id, descricao, preco, foto) VALUES
(1, 'Ar Condicionado Portátil', 2498.9, 'imagem_padrao.png'),
(2, 'Torneira de Cozinha', 379.9, 'imagem_padrao.png'),
(3, 'Roteador D-Link Wireless 150MBPS ', 69, 'imagem_padrao.png'),
(4, 'Smartphone Moto G 5 Dual Chip Android 7.0 Tela 5\" 32GB 4G Câmera 13MP - Platinum', 999, 'imagem_padrao.png'),
(5, 'Óculos De Sol Rayban Retrô Marrom', 605, 'imagem_padrao.png'),
(6, 'Teclado Gamer Multilaser Warrior USB com LED - PC', 138.5, 'imagem_padrao.png'),
(7, 'Mouse Gamer Razer Deathadder Chroma 10000DPI - PC', 380, 'imagem_padrao.png'),
(8, 'Fone de Ouvido In Ear UrBeats Dourado - Beats by Dr. Dre', 159, 'imagem_padrao.png'),
(9, 'Pen Drive Emtec - Looney Tunes - Yosemite 8Gb', 54.99, 'imagem_padrao.png'),
(10, 'Smart TV LED 43\" Samsung UN43J5200AGXZD Full HD Conversor Digital 2 HDMI 1 USB - Preto', 1894.99, 'imagem_padrao.png'),
(11, 'Aspirador de Pó e Água Electrolux A10N1 Cinza e Preto 10L - 1200W', 214.99, 'imagem_padrao.png'),
(12, 'Jogo Genius - Estrela', 129.9, 'imagem_padrao.png'),
(13, 'Kit Conversor Digital Aquário Dtv-5100 Antena Interna E Hdmi', 123.9, 'imagem_padrao.png'),
(14, 'Relógio Bluetooth Smartwatch Gear Chip Gt08 Iphone E Android', 134.9, 'imagem_padrao.png');

