
<?php if (isset($_SESSION)): ?>
                            <li class="page-scroll"><a href="?rt=academico/logout" id="">Sair</a></li>

                        <?php else: ?>
                            <li class="active"><a type="button" class="btn "  data-toggle="modal" data-target="#myModal">Entrar  <span class="caret"></span></a></li>
                        
                        <?php endif; ?>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                        <!--Entrar-->
                                        <ul>
                                            <form action="?rt=academico/login" method="post" class="form-vertical">
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail">Login</label>
                                                    <div class="controls">
                                                        <input id="login" name="login" type="text" placeholder="Digite o seu e-mail..." autofocus />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Senha</label>
                                                    <div class="controls">
                                                        <input id="senha" name="senha" type="password" placeholder="Digite a sua senha..." />
                                                    </div>
                                                </div>
                                                <div >
                                                    
                                                </div><br/>
                                                <input type="submit" value="Entrar" href="?rt=root"/>
                                            </form>