<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex009/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  - Orientação a Objetos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex009.css">
</head>
<body>
<a href="../index.php" class="back">← Voltar</a>
<div class="container">

    <header>
        <h1>🧩 Orientação a Objetos</h1>
        <p>Classes, objetos, herança, encapsulamento e polimorfismo</p>
    </header>

    <?php
    // ─── Classes ───
    class Carro {
        public $marca;
        public $modelo;
        public $cor;
        public function ligar() {
            return "O $this->marca $this->modelo deu a partida: Vrummm!";
        }
    }

    $meuCarro = new Carro();
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corolla";
    $meuCarro->cor = "Prata";

    $carroDoAmigo = new Carro();
    $carroDoAmigo->marca = "Fiat";
    $carroDoAmigo->modelo = "Uno";
    $carroDoAmigo->cor = "Com escada no teto";

    // ─── Abstração ───
    abstract class ContaBancaria {
        protected $saldo = 0;
        abstract public function depositar($valor);
    }

    class ContaCorrente extends ContaBancaria {
        public function depositar($valor) {
            $this->saldo += $valor;
            return $this->saldo;
        }
    }
    $conta = new ContaCorrente();

    // ─── Encapsulamento ───
    class Funcionario {
        private $salario;
        public function setSalario($valor) {
            if ($valor > 0) $this->salario = $valor;
        }
        public function getSalario() {
            return "R$ " . number_format($this->salario, 2, ',', '.');
        }
    }
    $dev = new Funcionario();
    $dev->setSalario(5000);

    // ─── Herança ───
    class Veiculo {
        public $marca;
        public function andar() {
            return "O veículo está se movendo.";
        }
    }
    class Moto extends Veiculo {
        public $cilindradas;
    }
    $minhaMoto = new Moto();
    $minhaMoto->marca = "Honda";
    $minhaMoto->cilindradas = 600;

    // ─── Polimorfismo ───
    class Animal {
        public function fazerSom() {
            return "Som genérico de animal.";
        }
    }
    class Cachorro extends Animal {
        public function fazerSom() { return "Au Au!"; }
    }
    class Gato extends Animal {
        public function fazerSom() { return "Miau!"; }
    }
    $dog = new Cachorro();
    $cat = new Gato();
    ?>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-class">🚗</div>
            <h2>Classes e Objetos</h2>
        </div>
        <div class="card-content">
            <p class="explica">Uma classe é o molde que define as propriedades e métodos de um objeto. O objeto é a instância concreta desse molde, com valores próprios para cada propriedade.</p>
            <div class="code-block">
                <span class="class">class</span> <span style="color:#ffcb6b">Carro</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> $marca;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> $modelo;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> ligar() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="string">"O \$this-&gt;marca ..."</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }<br><br>
                $c = <span class="keyword">new</span> Carro();<br>
                $c->marca = <span class="string">"Toyota"</span>;
            </div>
            <div class="output-box">
                <div class="tag">▶ Objetos instanciados</div>
                <div class="obj-flex">
                    <div class="obj-box" style="flex:1;min-width:180px">
                        <div class="obj-icon">🚘</div>
                        <div class="obj-info">
                            <div class="obj-title"><?= $meuCarro->marca ?> <?= $meuCarro->modelo ?></div>
                            <div class="obj-desc">Cor: <?= $meuCarro->cor ?></div>
                            <div class="obj-sound"><?= $meuCarro->ligar() ?></div>
                        </div>
                    </div>
                    <div class="obj-box" style="flex:1;min-width:180px">
                        <div class="obj-icon">🚙</div>
                        <div class="obj-info">
                            <div class="obj-title"><?= $carroDoAmigo->marca ?> <?= $carroDoAmigo->modelo ?></div>
                            <div class="obj-desc">Cor: <?= $carroDoAmigo->cor ?></div>
                            <div class="obj-sound"><?= $carroDoAmigo->ligar() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-abstract">🏦</div>
            <h2>Abstração</h2>
        </div>
        <div class="card-content">
            <p class="explica">Classes abstratas servem como contratos: definem métodos que as classes filhas são obrigadas a implementar. Você não pode instanciar uma classe abstrata diretamente.</p>
            <div class="code-block">
                <span class="class">abstract class</span> <span style="color:#ffcb6b">ContaBancaria</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">protected</span> $saldo = <span class="number">0</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="class">abstract public function</span> depositar($valor);<br>
                }<br><br>
                <span class="class">class</span> <span style="color:#ffcb6b">ContaCorrente</span> <span class="keyword">extends</span> ContaBancaria {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> depositar($valor) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->saldo += $valor;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Depósito realizado</div>
                <div class="obj-box">
                    <div class="obj-icon">💰</div>
                    <div class="obj-info">
                        <div class="obj-title">Saldo após depósito de R$ 1.500,00</div>
                        <div class="obj-desc">R$ <?= number_format($conta->depositar(1500), 2, ',', '.') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-encaps">🔒</div>
            <h2>Encapsulamento</h2>
        </div>
        <div class="card-content">
            <p class="explica">Encapsulamento protege os dados de uma classe usando modificadores de acesso. Com <code>private</code>, os atributos só podem ser alterados por métodos públicos (getters/setters), permitindo validar os valores antes de atribuí-los.</p>
            <div class="code-block">
                <span class="class">class</span> <span style="color:#ffcb6b">Funcionario</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">private</span> $salario;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> setSalario($valor) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> ($valor > <span class="number">0</span>) $this->salario = $valor;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> getSalario() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> ...;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Getter/Setter</div>
                <div class="obj-box">
                    <div class="obj-icon">👨‍💻</div>
                    <div class="obj-info">
                        <div class="obj-title">Salário do desenvolvedor</div>
                        <div class="obj-desc"><?= $dev->getSalario() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-heranca">🧬</div>
            <h2>Herança</h2>
        </div>
        <div class="card-content">
            <p class="explica">Herança permite que uma classe filha reutilize propriedades e métodos da classe pai usando <code>extends</code>. A filha pode adicionar novas funcionalidades sem modificar a classe original.</p>
            <div class="code-block">
                <span class="class">class</span> <span style="color:#ffcb6b">Veiculo</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> $marca;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> andar() { ... }<br>
                }<br><br>
                <span class="class">class</span> <span style="color:#ffcb6b">Moto</span> <span class="keyword">extends</span> Veiculo {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> $cilindradas;<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Moto herdou de Veiculo</div>
                <div class="obj-box">
                    <div class="obj-icon">🏍️</div>
                    <div class="obj-info">
                        <div class="obj-title"><?= $minhaMoto->marca ?> (<?= $minhaMoto->cilindradas ?>cc)</div>
                        <div class="obj-desc"><?= $minhaMoto->andar() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-poli">🎭</div>
            <h2>Polimorfismo</h2>
        </div>
        <div class="card-content">
            <p class="explica">Polimorfismo permite que classes diferentes redefinam um mesmo método herdado com comportamentos distintos. O mesmo método <code>fazerSom()</code> age de forma diferente em cada classe filha.</p>
            <div class="code-block">
                <span class="class">class</span> <span style="color:#ffcb6b">Cachorro</span> <span class="keyword">extends</span> Animal {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> fazerSom() { <span class="keyword">return</span> <span class="string">"Au Au!"</span>; }<br>
                }<br>
                <span class="class">class</span> <span style="color:#ffcb6b">Gato</span> <span class="keyword">extends</span> Animal {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> fazerSom() { <span class="keyword">return</span> <span class="string">"Miau!"</span>; }<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Mesmo método, comportamentos diferentes</div>
                <div class="obj-flex">
                    <div class="obj-card">
                        <span style="font-size:1.6rem">🐶</span>
                        <div>
                            <div style="font-weight:600;color:#fff;font-size:.85rem">Cachorro</div>
                            <div style="color:#4facfe"><?= $dog->fazerSom() ?></div>
                        </div>
                    </div>
                    <div class="obj-card">
                        <span style="font-size:1.6rem">🐱</span>
                        <div>
                            <div style="font-weight:600;color:#fff;font-size:.85rem">Gato</div>
                            <div style="color:#f093fb"><?= $cat->fazerSom() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Feito com 💜 &bull; PHP &mdash; Ex009
    </footer>

</div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>
