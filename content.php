
    <section>
        <div id="button">
            <button type="submit" class="button button-primary button-rounded">Enviar</button>
            <button type="button" class="button button-rounded">Alterar</button>
            <button type="button" class="button button-rounded">Excluir</button>
            <button type="button" class="button button-rounded">Cancelar</button>
        </div>
        
        <div id="inputs">
            <label for="campoTexto">Input Tipo Texto </label>
            <input type="text" name="campoTexto" class="form-control" value="">

            <label for="campoNumber">Input Tipo Numérico </label>
            <input type="number" name="campoNumber" class="form-control" value="">

            <label for="campoSenha">Input Tipo Password </label>
            <input type="password" name="campoSenha" value="" class="form-control">
        </div>

        <div id="select">
            <select>
                <option value="opt1">Opção 1</option>
                <option value="opt2">Opção 2</option>
                <option value="opt3">Opção 3</option>
            </select>
        </div>

        <div id="forms">
            <form action="submit" method="post">
                <label for="login">Login </label>
                <input type="text" name="login" class="form-control" placeholder="Digite o Email">

                <label for="senha">Senha </label>
                <input type="password" name="senha" class="form-control" placeholder="Digite a Senha">

                <button type="submit" class="button button-primary button-rounded">Entrar</button>
            </form>
        </div>

        <div id="table">
            <table border=1 class="tabela">
                <thead>
                    <td class="col-md-1">Coluna 1</td>
                    <td class="col-md-2">Coluna 2</td>
                    <td class="col-md-3">Coluna 3</td>
                    <td class="col-md-4">Coluna 4</td>
                    <td class="col-md-5">Coluna 5</td>
                    <td class="col-md-6">Coluna 6</td>
                </thead>

                <tbody>
                    <tr class="linha">
                        <td class="col-md-1">L1 - C1</td>
                        <td class="col-md-2">L1 - C2</td>
                        <td class="col-md-3">L1 - C3</td>
                        <td class="col-md-4">L1 - C4</td>
                        <td class="col-md-5">L1 - C5</td>
                        <td class="col-md-6">L1 - C6</td>
                    </tr>
                    <tr class="linha">
                        <td class="col-md-1">L2 - C1</td>
                        <td class="col-md-2">L2 - C2</td>
                        <td class="col-md-3">L2 - C3</td>
                        <td class="col-md-4">L2 - C4</td>
                        <td class="col-md-5">L2 - C5</td>
                        <td class="col-md-6">L2 - C6</td>
                    </tr>
                    <tr class="linha">
                        <td class="col-md-1">L3 - C1</td>
                        <td class="col-md-2">L3 - C2</td>
                        <td class="col-md-3">L3 - C3</td>
                        <td class="col-md-4">L3 - C4</td>
                        <td class="col-md-5">L3 - C5</td>
                        <td class="col-md-6">L3 - C6</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div id="listaOrd">
            <ol>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ol>
        </div>

        <div id="listaNao">
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </div>
        <div id="imagem">
            <img src="resources/img/medium-logo.png" alt="Medium Logo">
        </div>

        <div id="link">
            <a href="http://medium.com" target="_blank">Medium Link</a>
        </div>

        <div id="youtube">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LbwmqJcQyHU" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>