## Explicação do header
Cor de background: Em vez de #FFFFF, ser #FAFAFA.

O header foi codado para ser transparente no início se sobrepondo a imagem inicial e quando scrollado ele ganha um background-color de branco (continua se sobrepondo ao conteúdo da página).

O que podemos fazer:
1) Se as imagens iniciais forem escuras, o texto (Sobre, Notícias, etc) tem que ser claro.
2) Se as imagens iniciais forem claras, o texto (Sobre, Notícias, etc) tem que ser escuro.
   
(Mas como o usuário vai escolher as imagens, então temos que tomar cuidado com isso. Talvez nós podemos colocar por padrão um sombreamento na imagem inicial)

4) O header pode não ser transparente no início. Então colocar uma background-color >>E<< mudar o position: fixed para position: sticky.
