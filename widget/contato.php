<link rel="stylesheet" href="/_projeto_imobiliaria/assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<div class="main_contact py-5 bg-light text-center">
    <div class="container">
            <h1 class="text-front"> Entre em Contato Conosco</h1>
            <p class="mb-0"> Quer conversar e ter um atendimento diferenciado em busca do seu imóvel dos sonhos?</p>
            <p>Preencha o formulário abaixo!</p>

            <div class="row text-start">
                <form id="contactForm">
                    <h2 class="icon-envelope text-black-50"> Envie um e-mail </h2>

                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira seu primeiro nome" required>
                        <div class="invalid-feedback" id="erro-nome">Por favor, preencha seu nome.</div>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira seu sobrenome" required>
                        <div class="invalid-feedback" id="erro-nome">Por favor, preencha seu sobrenome.</div>
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu melhor e-mail" required>
                        <div class="invalid-feedback" id="erro-email">Insira um e-mail válido.</div>
                    </div>

                    <div class="form-group mb-4">
                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Insira seu telefone com DDD" required>
                        <div class="invalid-feedback" id="erro-telefone">Telefone deve conter DDD e ao menos 10 dígitos.</div>
                    </div>

                    <div class="form-group">
                        <textarea rows="5" name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" class="form-control" required></textarea>
                        <div class="invalid-feedback" id="erro-mensagem">Por favor, escreva sua mensagem.</div>
                    </div>

                    <div class="form-group text-end mt-4">
                        <button type="submit" class="btn btn-front">Enviar Contato</button>
                    </div>
                </form>
            </div>
    </div>
</div>

<div class="main_contact_types py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-4">
                <h2 class="icon-envelope"> Por E-mail </h2>
                <p> Iremos entrar em contato com você assim que possível.</p>
                <p class="pt-4"><a href="" class="text-front"> Email@email.com.br </a></p>
            </div>

            <div class="col-4">
                <h2 class="icon-phone"> Por Telefone </h2>
                <p> Estamos disponiveis no número abaixo no horário comercial.</p>
                <p class="text-front pt-2">+55 (44) 9999-1234</p>
            </div>

            <div class="col-4">
                <h2 class="icon-share-alt"> Redes Sociais </h2>
                <p> Fique por dentro de tudo o que compartilhamos nas Redes Sociais!</p>
                <p> <button class="btn btn-front icon-whatsapp icon-notext"> </button> <button class="btn btn-front icon-facebook icon-notext"> </button> <button class="btn btn-front icon-instagram icon-notext"> </button></p>


            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        e.preventDefault();

        let nome = document.getElementById("nome").value.trim();
        let email = document.getElementById("email").value.trim();
        let telefone = document.getElementById("telefone").value.trim();
        let mensagem = document.getElementById("mensagem").value.trim();


        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let telefoneLimpo = telefone.replace(/\D/g, "");

        if (nome === "") {
            alert("Por favor, preencha seu nome.");
            return;
        }

        if (!emailRegex.test(email)) {
            alert("Por favor, insira um e-mail válido.");
            return;
        }

        if (telefoneLimpo.length < 10) {
            alert("Por favor, insira um telefone válido com DDD.");
            return;
        }

        if (mensagem === "") {
            alert("Por favor, escreva sua mensagem.");
            return;
        }

        alert("Formulário enviado com sucesso!");

        this.reset();
    });
</script>
