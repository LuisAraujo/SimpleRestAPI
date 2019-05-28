# SimpleRestAPI

Essa é uma implementação simples de uma API Rest. Essa API foi construida para uso da bibliotefa OkHTTP, na disciplina de Dispositivos Móveis. 

## Padrões de URLs

1 - Obter um produto

*http://localhost/Simple_Rest/get/produtos/id*

2 - Obter todos os produtos

*http://localhost/Simple_Rest/get/produtos/all*

3 - Deletar um produto

*http://localhost/Simple_Rest/delete/produtos/id*

4 - Inserir um produto

*http://localhost/Simple_Rest/post/produtos/nome=Teste,descricao=Teste,categoria=1*

5 - Atualizar um produto

*http://localhost/Simple_Rest/put/produtos/id=1,nome=Teste,descricao=Teste,categoria=1*


Obs: id é um inteiro, referente ao id (primary key) do produto.

Atenção: essa API não possui controle de acesso, logo só pode ser utilizada para teste.  

## Instalação em um WebService

É preciso copiar todos os arquivos para um servidor, inclusive o arquivo *.htaccess* para possibilitar o roteamento.

No arquivo *.htaccess* modifique o *http://localhost/SimpleRestAPI/produtos/* pela url do seu servidor.

Execute o sql do arquivo *banco.sql*, na pasta conn para criar o banco de dados. 

verifique as credenciais do seu banco de dados, no arquivo *connecction.php*.
