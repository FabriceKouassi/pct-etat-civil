@extends('front.layouts.app')
@section('title', $title)
@section('content')
    <!-- Hero Section -->
    <section class="hero" id="accueil">
        <div class="container">
            <h2>Plateforme Numérique de Gestion de l'État Civil</h2>
            <p>Simplifiez vos démarches administratives avec notre service en ligne sécurisé. Déclaration de naissance, demande d'acte de mariage, rectification d'état civil et bien plus encore.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Accéder au service</a>
                <a href="#services" class="btn btn-outline">Découvrir nos services</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="fonctionnalites">
        <div class="container">
            <div class="section-title">
                <h2>Nos Fonctionnalités</h2>
                <p>Découvrez les avantages de notre plateforme numérique pour la gestion de votre état civil</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <h3>Déclaration de naissance</h3>
                    <p>Effectuez en ligne la déclaration de naissance de votre enfant sans vous déplacer en mairie. Recevez l'acte de naissance directement par courrier.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-ring"></i>
                    </div>
                    <h3>Acte de mariage</h3>
                    <p>Demandez facilement une copie d'acte de mariage ou effectuez les démarches préalables à votre union civile en quelques clics.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Documents officiels</h3>
                    <p>Obtenez rapidement les copies intégrales ou extraits d'actes d'état civil (naissance, mariage, décès) avec une authentification garantie.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <h3>Rectifications</h3>
                    <p>Demandez la correction d'erreurs matérielles sur vos actes d'état civil via une procédure simplifiée et suivie en temps réel.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Sécurité des données</h3>
                    <p>Vos informations personnelles sont protégées selon les normes les plus strictes de cybersécurité et de protection des données.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Assistance 24/7</h3>
                    <p>Notre équipe est disponible pour vous accompagner dans vos démarches à tout moment via chat, email ou téléphone.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Nos Services</h2>
                <p>Découvrez l'ensemble des services que nous mettons à votre disposition</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="service-content">
                        <h3>Déclaration de Naissance</h3>
                        <p>Déclarez la naissance de votre enfant en ligne dans les délais légaux et recevez l'acte officiel.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="service-content">
                        <h3>Copie d'Acte</h3>
                        <p>Demandez une copie intégrale ou un extrait d'acte de naissance, mariage ou décès.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="service-content">
                        <h3>Rectification d'Acte</h3>
                        <p>Corrigez les erreurs matérielles figurant sur vos documents d'état civil.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <i class="fas fa-passport"></i>
                    </div>
                    <div class="service-content">
                        <h3>Livret de Famille</h3>
                        <p>Demandez un nouveau livret de famille ou une mise à jour du vôtre.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>Comment ça marche ?</h2>
                <p>Effectuez vos démarches en seulement 4 étapes simples</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Créez votre compte</h3>
                    <p>Inscrivez-vous en quelques minutes avec votre email et pièce d'identité.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Sélectionnez le service</h3>
                    <p>Choisissez parmi nos services celui qui correspond à votre besoin.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Remplissez le formulaire</h3>
                    <p>Complétez les informations requises et téléchargez les pièces justificatives.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Recevez vos documents</h3>
                    <p>Vos documents officiels vous sont envoyés par courrier ou disponibles en téléchargement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Témoignages</h2>
                <p>Ce que nos utilisateurs disent de notre service</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>J'ai pu déclarer la naissance de mon fils sans me déplacer à la mairie, malgré mon emploi du temps chargé. Un gain de temps considérable !</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            KA
                        </div>
                        <div class="author-info">
                            <h4>Kouamé A.</h4>
                            <p>Abidjan</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>La rectification de mon acte de naissance s'est faite en moins d'une semaine grâce à ce service. Je recommande vivement !</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            FB
                        </div>
                        <div class="author-info">
                            <h4>Fatou B.</h4>
                            <p>Bouaké</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>En tant qu'expatrié, ce service m'a permis d'obtenir une copie de mon acte de mariage rapidement sans retourner au pays. Merci !</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            JL
                        </div>
                        <div class="author-info">
                            <h4>Jean-Luc K.</h4>
                            <p>Paris, France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contactez-nous</h2>
                <p>Nous sommes à votre disposition pour toute question ou assistance</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Notre équipe vous répond</h3>
                    <p>Pour toute question concernant nos services ou vos démarches en cours, n'hésitez pas à nous contacter par l'un des moyens ci-dessous.</p>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4>Téléphone</h4>
                            <p>+225 07 88 46 36 92</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>contact@etatcivil-ci.gouv.ci</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Adresse</h4>
                            <p>Ministère de l'Intérieur et de la Sécurité<br>
                            Plateau, Abidjan<br>
                            Côte d'Ivoire</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form>
                        <input type="text" placeholder="Votre nom" required>
                        <input type="email" placeholder="Votre email" required>
                        <input type="text" placeholder="Sujet">
                        <textarea placeholder="Votre message" required></textarea>
                        <button type="submit">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
