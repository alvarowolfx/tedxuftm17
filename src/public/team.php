<?php
    $team = [
        [
            name => "Lucas Bernadino",
            position => "Lead Organizer",
            img => "/static/images/team/lucasb.jpg",
            bio => "Estudante de Engenharia Florestal na UFMT, campus Cuiabá. Desenvolveu trabalhos em organizações como: AIESEC, CHOICE, Ensina Brasil e Fundação Estudar. Contribui para o ecossistema de empreendedorismo em Mato Grosso através de diversos eventos e ações, tendo organizado o Startup Weekend Cuiabá 2017.",
            links => [
                facebook => "https://www.facebook.com/lucas.m.h.bernardino",
                linkedin => "https://br.linkedin.com/in/lucas-bernardino-457562111",
                instagram => "https://www.instagram.com/luquinhasmhb/"
            ]
        ],
        [
            name => "Caroline Vaez",
            position => "Infraestrutura",
            img => "/static/images/team/carol.jpg",
            bio => "",
            links => [
                linkedin => "https://www.linkedin.com/in/carolvaez/"
            ]
        ],
        [
            name => "Sânia Camargos",
            position => "Relacionamento",
            img => "/static/images/team/sania.jpg",
            bio => "",
            links => [
                linkedin => "https://www.linkedin.com/in/sania-camargos-94537833/"
            ]
        ],
        [
            name => "Lucas Afrânio",
            position => "Comunicação",
            img => "/static/images/team/lucasa.jpg",
            bio => "Estudante de Ciência da Computação da UFMT, ex - Diretor da AIESEC Cuiabá e atual Presidente da Infocorp - Empresa Júnior de Computação da UFMT.",
            links => [
                facebook => "https://www.facebook.com/lucas.afranio.5",
                instagram => "https://www.instagram.com/lucas.afranio/",
                linkedin => "https://www.linkedin.com/in/lucas-afrânio-623a0294/"
            ]
        ],
        [
            name => "Alvaro Viebrantz",
            position => "Tecnologia da Informação",
            img => "/static/images/team/alvaro.jpg",
            bio => "Google Developer Expert em IoT, organizador do grupo DevMT e do GDG Cuiabá. Já ministrou diversos cursos e palestras sobre diversos assuntos, em especial sobre desenvolvimento mobile, nuvem e Internet das Coisas. Agora mantém um blog sobre sobre automação e internet das coisas. Tem experiência como desenvolvedor na startup Procurix e no Estuda.com. Formado em Ciência da Computação pela UFMT.",
            links => [                    
                facebook => "https://facebook.com/alvarowolfx",
                linkedin => "https://br.linkedin.com/in/alvaro-viebrantz-55119048",
                instagram => "https://instagram.com/alvaroviebrantz",
                twitter => "https://twitter.com/alvaroviebrantz",
                github => "https://github.com/alvarowolfx",
            ]
        ],
        [
            name => "Patrícia Anny",
            position => "Curadoria",
            img => "/static/images/team/patricia.jpg",
            bio => "Nutricionista Responsável Técnico e  Nutricionista Home Care, ex diretora da AIESEC em Cuiabá, já participou do VER-SUS e Startup Weekend Cuiabá como helper. Já realizou palestras em eventos universitários e em fóruns de nutrição, atualmente realiza  treinamentos BPM e assuntos relacionados.",
            links => [                    
                facebook => "https://www.facebook.com/anny.8D",
                linkedin => "https://www.linkedin.com/in/annyrodje",
                instagram => "https://www.instagram.com/annyrodje/",
            ]
        ],
        [
            name => "Marina Damasceno Pereira",
            position => "Curadoria",
            img => "/static/images/team/marina.jpg",
            bio => "Bióloga pela Universidade Federal de Minas Gerais (UFMG), foi bolsista nas áreas de pesquisa e extensão, além de atuar no movimento estudantil e participar de um intercâmbio acadêmico na University of Sydney. Mudou-se para Cuiabá para ser professora de ciências em escola pública de contexto vulnerável, participando da primeira turma do programa de desenvolvimento de lideranças educacionais da ONG Ensina Brasil.",
            links => [                    
                facebook => "https://www.facebook.com/damasmarina"
            ]
        ],
        [
            name => "Carlos Wolff",
            position => "Comercial/Parcerias",
            img => "/static/images/team/carlos.jpg",
            bio => "",
            links => [                    
                linkedin => "https://www.linkedin.com/in/carlos-alberto-wolff-b768118/"
            ]
        ]
    ];
    $index = 0;
?>
<div id="fh5co-about-us" data-section="team">
    <div class="container">
        <div class="row" id="team-us">
             <div class="row" id="team">
                <div class="col-md-12 section-heading text-center to-animate">
                    <h2>Organizadores</h2>
                </div>
                <div class="col-md-12">
                    <div class="row row-bottom-padded-lg">
                        <?php foreach($team as $member){ $index++;?>
                            <div class="col-md-4 text-center to-animate">
                            <div class="person">
                                <img src="<?php echo $member["img"] ?>" class="img-responsive img-rounded" alt="Person">
                                <h3 class="name"><?php echo $member["name"] ?></h3>
                                <div class="position"><?php echo $member["position"] ?></div>
                                <p>
                                    <?php echo $member["bio"] ?>
                                </p>
                                <ul class="social social-circle">
                                    <?php foreach($member["links"] as $type => $url){ ?>
                                        <li><a href="<?php echo $url ?>" target="_blank"><i class="icon-<?php echo $type ?>"></i></a></li>
                                    <?php } ?>                                     
                                </ul>
                            </div>
                        </div>

                        <?php if($index % 3 == 0){ ?>
                                </div>
                            </div>
                            <div class="clearfix visible-md-block visible-lg-block"></div>
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-lg">
                        <?php }
                            } ?>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>