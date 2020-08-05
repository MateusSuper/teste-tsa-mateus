
/*teste de BD. Questão 1: */

SELECT nome_empresa 
FROM organizacao 
WHERE data_fundacao = (select max(data_fundacao) from organizacao); /* letra a*/

SELECT nome
FROM colaborador
WHERE salario =  (select max(salario) from colaborador);/*letra b*/


SELECT nome, data_nascimento 
FROM colaborador 
ORDER BY salario DESC; /* letra c*/

SELECT timestampdiff(year, data_nascimento, curdate()) 
FROM colaborador;/*letra d*/

ALTER TABLE organizacao CHANGE nome nome_empresa VARCHAR(255); /*mudança de nome da coluna nome natabela organização*/

SELECT nome, nome_empresa /*letra e*/
FROM colaborador
join organizacao
on colaborador.organizacao_id = organizacao.id;

select nome_empresa /*questão 2 - NÃO CONSEGUI FAZER*/
from organizacao
join colaborador
on colaborador.organizacao_id = organizacao.id
where salario = (select max(salario) from colaborador);

select avg (salario)  /*questão 3*/
from colaborador
join organizacao
on colaborador.organizacao_id = organizacao.id
where organizacao_id = (select distinct organizacao_id from colaborador);


select nome_empresa /*questão 4*/
from organizacao
join colaborador
on colaborador.organizacao_id = organizacao.id
where data_nascimento = (select max(data_nascimento) from colaborador);











