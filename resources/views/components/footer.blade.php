<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <img src="/theme/assets/img/logo-white.png" width="200" class="mb-5">
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Início</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre nós</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#team">Equipa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contactos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#" data-bs-toggle="modal"
                                data-bs-target="#privacy">Política de privacidade</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Soluções</h4>
                    <ul>
                        @foreach ($services as $service)
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Newsletter</h4>
                    <p>Prometemos enviar atualizações relevantes para o seu negócio.</p>
                    <form action="/forms/newsletter" method="post" id="forms-newsletter">
                        @csrf
                        <input type="email" name="email">
                        <input type="submit" value="Subscrever">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>PM</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://netlook.pt">Netlook</a>
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Modal -->
<div class="modal fade" id="privacy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Política Privacidade</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><span style="color: rgb(68, 68, 68);">A sua privacidade é importante para nós. É política do Pedro
                        Miranda respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no
                        site <a href="https://pedromiranda.pt">Pedro Miranda</a>, e outros sites que possuímos e
                        operamos.</span></p>
                <p><span style="color: rgb(68, 68, 68);">Solicitamos informações pessoais apenas quando realmente
                        precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu
                        conhecimento e consentimento. Também informamos por que estamos coletando e como será
                        usado.</span></p>
                <p><span style="color: rgb(68, 68, 68);">Apenas retemos as informações coletadas pelo tempo necessário
                        para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios
                        comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso
                        ou modificação não autorizados.</span></p>
                <p><span style="color: rgb(68, 68, 68);">Não compartilhamos informações de identificação pessoal
                        publicamente ou com terceiros, exceto quando exigido por lei.</span></p>
                <p><span style="color: rgb(68, 68, 68);">O nosso site pode ter links para sites externos que não são
                        operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses
                        sites e não podemos aceitar responsabilidade por suas respectivas&nbsp;</span><a
                        href="https://politicaprivacidade.com/" rel="noopener noreferrer" target="_blank"
                        style="background-color: transparent; color: rgb(68, 68, 68);">políticas de privacidade</a><span
                        style="color: rgb(68, 68, 68);">.</span></p>
                <p><span style="color: rgb(68, 68, 68);">Você é livre para recusar a nossa solicitação de informações
                        pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</span></p>
                <p><span style="color: rgb(68, 68, 68);">O uso continuado de nosso site será considerado como aceitação
                        de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida
                        sobre como lidamos com dados do usuário e informações pessoais, entre em contacto
                        connosco.</span></p>
                <p><span style="color: rgb(68, 68, 68);">
                        <ul>
                            <li><span style="color: rgb(68, 68, 68);">O serviço Google AdSense que usamos para veicular
                                    publicidade usa um cookie DoubleClick para veicular anúncios mais relevantes em toda
                                    a Web e limitar o número de vezes que um determinado anúncio é exibido para
                                    você.</span></li>
                            <li><span style="color: rgb(68, 68, 68);">Para mais informações sobre o Google AdSense,
                                    consulte as FAQs oficiais sobre privacidade do Google AdSense.</span></li>
                            <li><span style="color: rgb(68, 68, 68);">Utilizamos anúncios para compensar os custos de
                                    funcionamento deste site e fornecer financiamento para futuros desenvolvimentos. Os
                                    cookies de publicidade comportamental usados ​​por este site foram projetados para
                                    garantir que você forneça os anúncios mais relevantes sempre que possível,
                                    rastreando anonimamente seus interesses e apresentando coisas semelhantes que possam
                                    ser do seu interesse.</span></li>
                            <li><span style="color: rgb(68, 68, 68);">Vários parceiros anunciam em nosso nome e os
                                    cookies de rastreamento de afiliados simplesmente nos permitem ver se nossos
                                    clientes acessaram o site através de um dos sites de nossos parceiros, para que
                                    possamos creditá-los adequadamente e, quando aplicável, permitir que nossos
                                    parceiros afiliados ofereçam qualquer promoção que pode fornecê-lo para fazer uma
                                    compra.</span></li>
                        </ul>
                        <p><br></p>
                    </span></p>
                <h3><span style="color: rgb(68, 68, 68);">Compromisso do Usuário</span></h3>
                <p><span style="color: rgb(68, 68, 68);">O usuário se compromete a fazer uso adequado dos conteúdos e da
                        informação que o Pedro Miranda oferece no site e com caráter enunciativo, mas não
                        limitativo:</span></p>
                <ul>
                    <li><span style="color: rgb(68, 68, 68);">A) Não se envolver em atividades que sejam ilegais ou
                            contrárias à boa fé a à ordem pública;</span></li>
                    <li><span style="color: rgb(68, 68, 68);">B) Não difundir propaganda ou conteúdo de natureza
                            racista, xenofóbica, </span><span style="color: rgb(33, 37, 41);"><a
                                href='https://apostasonline.guru/bet365-apostas/'
                                style='color:inherit !important; text-decoration: none !important; font-size: inherit !important;'>
                                pix bet365</a></span><span style="color: rgb(68, 68, 68);"> ou azar, qualquer tipo de
                            pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</span></li>
                    <li><span style="color: rgb(68, 68, 68);">C) Não causar danos aos sistemas físicos (hardwares) e
                            lógicos (softwares) do Pedro Miranda, de seus fornecedores ou terceiros, para introduzir ou
                            disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam
                            capazes de causar danos anteriormente mencionados.</span></li>
                </ul>
                <h3><span style="color: rgb(68, 68, 68);">Mais informações</span></h3>
                <p><span style="color: rgb(68, 68, 68);">Esperemos que esteja esclarecido e, como mencionado
                        anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais
                        seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso
                        site.</span></p>
                <p><span style="color: rgb(68, 68, 68);">Esta política é efetiva a partir de&nbsp;30 March 2023
                        13:07</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>