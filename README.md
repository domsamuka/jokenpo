# JoKenPô!

Projeto 1 - SaaS do zero ao ＄ - Torneio Multiplayer de JoKenPô

**Objetivo**: Oferecer uma alternativa para quem quer fazer sorteios de produtos.

**Descrição**: JoKenPô será uma plataforma multiplayer de torneios de pedra, papel e tesoura.

**Premissas**:

1. O usuário poderá criar quantos torneios quiser.
1. Ao final do processo de criação do torneio, o usuário verá o link de divulgação. Este link de divulgação será customizável.
1. No processo de criação do torneio, vamos pedir detalhes do prêmio, imagem, título, descrição, data do torneio, formas de inscrição (ações em mídias sociais).
1. O dono do torneio poderá definir se deseja que seu torneio apareça publicamente no jokenpo.dev.
1. Na data do torneio, o dono terá acesso a um dashboard, onde ele poderá (manualmente) dar início a cada etapa, tendo acesso a infos básicas sobre quem já está online, pronto para participar.
1. O dono do torneio poderá gerenciar participantes antes do início do torneio.
1. Após o início do torneio, participantes fora da arena não poderão mais jogar. (só assistir?)
1. A versão grátis terá o limite de 32 participantes.
1. Teremos 2 versões pagas (valores a definir): Limite de 1000 participantes e ILIMITADO.
1. O participante poderá se inscrever em quantos torneios quiser. Mas precisará cumprir as "formas de inscrição" (curtir FB, seguir TW, inscrever YT, etc) definidas por cada torneio.
1. O participante poderá visualizar todos os torneios (atuais e passados) em que está inscrito.
1. Os usuários terão uma tela de administração de perfil, com possibilidade de vincular suas redes sociais.
1. (Sugestão) Permitir que o usuário assista ao torneio sem estar inscrito.
1. (Sugestão) Permitir que o participante derrotado possa continuar assistindo ao torneio.
1. (Sugestão) Participante terá um perfil público que mostra todos os torneios que participou, a posição em cada torneio, com medalhas e troféis bonitinhos.
1. O participante será notificado com antecedência sobre o início dos torneios.
1. Na data de início do torneio, os participantes receberão um link para a arena.
1. Na arena, o participante será instruído sobre cada etapa:

    1. Etapa 1: Aguardando sorteio das chaves.
    1. Etapa 2: Conectando com Adversário.
    1. Etapa 3: Início do Timer (3min?) para a disputa. Esgotando o timer e não havendo vencedor, randomiza quem vai próxima etapa.
    1. Etapa 4: Selecione sua arma (pedra/papel/tesoura).
    1. Etapa 5: Após a escolha das armas por ambos, contabiliza o placar.
    1. Etapa 6: Volta para a etapa 4 e repete até um dos participantes atingir 3 pontos.
    1. Etapa 7: Quem atingir 3 pontos primeiro, vence a etapa. Quem perder, está fora da competição.
    1. Etapa 8: Volta para a Etapa 1, aguardando o sorteio da nova chave só com os vencedores da etapa anterior.

1. O vencedor do torneio será congratulado e fornecerá os dados adicionais para receber o prêmio.
1. Na página do perfil, o usuário poderá fornecer seu endereço para recebimento dos prêmios. O endereço não aparecerá publicamente e só será visto pelo dono do Torneio APÓS o usuário vencer.
1. O dono do torneio enviará o prêmio para o vencedor, podendo colocar o código de rastreio no próprio sistema.
1. Ao término do torneio, o status muda para concluído e a página do torneio fica acessível com o histórico das jogadas OU pódio dos vencedores.
1. O site jokenpo.dev listará todos os torneios públicos em aberto (ordenado por data de início).




## Instalação

1. Clone o repositório.
2. Rode o comando `composer install` para instalar as dependências.
3. Crie um banco de dados vazio.
4. Copie o arquivo `.env.example` como `.env` e edite as informações de acesso ao banco de dados (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, etc).
5. Rode o comando `php artisan key:generate` para gerar uma chave de aplicativo.
6. Rode o comando `php artisan migrate` para criar as tabelas necessárias.
7. Acesse o projeto no navegador.
