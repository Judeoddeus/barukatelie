--
-- Banco de dados: `db_baruk-atelie`
--
CREATE DATABASE `baruk_atelie` 

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agenda-cliente`
--

CREATE TABLE `agenda_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_agenda-cliente`
--

INSERT INTO `agenda_cliente` (`id`, `nome`, `telefone`, `data`, `hora`) VALUES
(1, 'Juliana', '1911111111', '2021-06-30', '10:00:00'),
(2, 'Maria', '1922222222', '2021-06-30', '11:00:00'),
(3, 'Julia', '1933333333', '2021-06-30', '13:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro-cliente`
--

CREATE TABLE `cadastro_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` int(8) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro-cliente`
--

INSERT INTO `cadastro_cliente` (`id`, `nome`, `senha`, `email`) VALUES

(NULL, 'Juliana', 123, 'juliana@email.com'),
(NULL, 'Maria', 456, 'maria@email.com'),
(NULL, 'Julia', 789, 'julia@email.com'),
(NULL, 'Mariana', 0118, 'mariana@email.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_agenda-cliente`
--
ALTER TABLE `tb_agenda-cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_cadastro-cliente`
--
ALTER TABLE `tb_cadastro-cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_agenda-cliente`
--
ALTER TABLE `tb_agenda-cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_cadastro-cliente`
--
ALTER TABLE `tb_cadastro-cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*tabela de medidas*/
ALTER TABLE `cadastro_medidas_cliente` ADD CONSTRAINT `fk_cadastro-cliente_medidas-cliente` FOREIGN KEY (`id_login_cliente`) REFERENCES `cadastro_cliente`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `cadastro_medidas_cliente`(`id`, `nome`, `busto`, `cintura`, `quadril`, `ombro_a_ombro`, `ombro`, `colarinho`, `entre_cavas_frente`, `centro _frente`, `entre_cavas_costas`, `centro_costas`, `alt_busto`, `separacao_do_busto`, `alt_frente`, `alt_costa`, `alt_quadril`, `alt_gancho`, `alt_gancho_frente`, `alt_gancho_costa`, `alt_cintura_ao_joelho`, `alt_cint_ao_tornozelo`, `largura_joelho`, `cumprimento_braco`, `larg_braco`, `punho`, `alt_manga3_4`, `alt_manga_curta`, `alt_desejada_da_saia`, `id_login_cliente`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]')

CREATE TABLE `cadastro_medidas_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `busto` double NOT NULL,
  `cintura` double NOT NULL,
  `quadril` double NOT NULL,
  `ombro_a_ombro` double NOT NULL,
  `ombro` double NOT NULL,
  `colarinho` double NOT NULL,
  `entre_cavas_frente` double NOT NULL,
  `centro _frente` double NOT NULL,
  `entre_cavas_costas` double NOT NULL,
  `centro_costas` double NOT NULL,
  `alt_busto` double NOT NULL,
  `separacao_do_busto` double NOT NULL,
  `alt_frente` double NOT NULL,
  `alt_costa` double NOT NULL,
  `alt_quadril` double NOT NULL,
  `alt_gancho` double NOT NULL,
  `alt_gancho_frente` double NOT NULL,
  `alt_gancho_costa` double NOT NULL,
  `alt_cintura_ao_joelho` double NOT NULL,
  `alt_cint_ao_tornozelo` double NOT NULL,
  `largura_joelho` double NOT NULL,
  `cumprimento_braco` double NOT NULL,
  `larg_braco` double NOT NULL,
  `punho` double NOT NULL,
  `alt_manga3_4` double NOT NULL,
  `alt_manga_curta` double NOT NULL,
  `alt_desejada_da_saia` double NOT NULL,
  `id_login_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cadastro_medidas_cliente` (`id`, `nome`, `busto`, `cintura`, `quadril`, `ombro_a_ombro`, `ombro`, `colarinho`, `entreCavasFrt`, `centroFrt`, `entreCavasCst`, `centroCst`, `alt_busto`, `separacaoBusto`, `alt_frente`, `alt_costa`, `alt_quadril`, `alt_gancho`, `alt_ganchoFrt`, `alt_ganchoCst`, `alt_cintJoelho`, `alt_cintTorno`, `largJoelho`, `cumpBraco`, `largBraco`, `punho`, `alt_manga3_4`, `alt_mangaCurta`, `alt_saia`, `id_login_cliente`) VALUES ('65', 'Juliana', '98', '76', '100', '25', '12', '21', '30', '50', '20', '30', '20', '8', '25', '25', '63', '85', '15', '56', '80', '50', '23', '92', '13', '8', '96', '35', '68', '65');

ALTER TABLE `cadastro_medidas_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cadastro-cliente_medidas-cliente` (`id_login_cliente`);


ALTER TABLE `cadastro_medidas_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `cadastro_medidas_cliente`
  ADD CONSTRAINT `fk_cadastro-cliente_medidas-cliente` FOREIGN KEY (`id_login_cliente`) REFERENCES `cadastro_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;