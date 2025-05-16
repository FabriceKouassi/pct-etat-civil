@extends('back.layouts.app')
@section('title', $title)
@section('content')

    @include('back.layouts.topbar')

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <div class="page-title">
            <h1>Tableau de Bord</h1>
            <button class="btn btn-primary">
                <i class="fas fa-plus"></i> Nouvelle Déclaration
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">Déclarations ce Mois</div>
                <div class="stat-value">1,248</div>
                <div class="stat-change up">
                    <i class="fas fa-arrow-up"></i> 12% vs mois dernier
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-title">Naissances Enregistrées</div>
                <div class="stat-value">856</div>
                <div class="stat-change up">
                    <i class="fas fa-arrow-up"></i> 8% vs mois dernier
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-title">Mariages Enregistrés</div>
                <div class="stat-value">192</div>
                <div class="stat-change down">
                    <i class="fas fa-arrow-down"></i> 5% vs mois dernier
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-title">Décès Déclarés</div>
                <div class="stat-value">200</div>
                <div class="stat-change up">
                    <i class="fas fa-arrow-up"></i> 3% vs mois dernier
                </div>
            </div>
        </div>

        <!-- Main Dashboard Grid -->
        <div class="dashboard-grid">
            <!-- Recent Activities -->
            <div class="recent-activities">
                <div class="section-header">
                    <h2>Activités Récentes</h2>
                    <a href="#" style="font-size: 0.9rem; color: var(--orange);">Voir tout</a>
                </div>

                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <div class="activity-details">
                            <div class="activity-title">Nouvelle déclaration de naissance</div>
                            <div class="activity-description">Déclaration pour Koffi Amani, né le 15/10/2023</div>
                            <div class="activity-time">
                                <i class="far fa-clock"></i> Il y a 15 minutes
                            </div>
                        </div>
                    </li>

                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="activity-details">
                            <div class="activity-title">Acte de naissance validé</div>
                            <div class="activity-description">Acte #NC-2023-10-1567 pour Amina Bamba</div>
                            <div class="activity-time">
                                <i class="far fa-clock"></i> Il y a 2 heures
                            </div>
                        </div>
                    </li>

                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-ring"></i>
                        </div>
                        <div class="activity-details">
                            <div class="activity-title">Nouvelle déclaration de mariage</div>
                            <div class="activity-description">Mariage entre Kouamé Jean et Traoré Aïcha</div>
                            <div class="activity-time">
                                <i class="far fa-clock"></i> Il y a 5 heures
                            </div>
                        </div>
                    </li>

                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="activity-details">
                            <div class="activity-title">Nouvelle demande d'acte</div>
                            <div class="activity-description">Demande d'acte de naissance #NC-2021-05-0892</div>
                            <div class="activity-time">
                                <i class="far fa-clock"></i> Il y a 1 jour
                            </div>
                        </div>
                    </li>

                    <li class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <div class="activity-details">
                            <div class="activity-title">Rectification d'acte</div>
                            <div class="activity-description">Rectification de l'acte #NC-2020-11-0456</div>
                            <div class="activity-time">
                                <i class="far fa-clock"></i> Il y a 2 jours
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <div class="section-header">
                    <h2>Actions Rapides</h2>
                </div>

                <div class="action-buttons">
                    <a href="#" class="action-btn">
                        <i class="fas fa-baby"></i>
                        <span>Déclarer une Naissance</span>
                    </a>

                    <a href="#" class="action-btn">
                        <i class="fas fa-ring"></i>
                        <span>Enregistrer un Mariage</span>
                    </a>

                    <a href="#" class="action-btn">
                        <i class="fas fa-cross"></i>
                        <span>Déclarer un Décès</span>
                    </a>

                    <a href="#" class="action-btn">
                        <i class="fas fa-file-alt"></i>
                        <span>Créer un Acte</span>
                    </a>

                    <a href="#" class="action-btn">
                        <i class="fas fa-book"></i>
                        <span>Éditer Livret Famille</span>
                    </a>

                    <a href="#" class="action-btn">
                        <i class="fas fa-search"></i>
                        <span>Rechercher un Acte</span>
                    </a>
                </div>

                <!-- Recent Documents -->
                <div class="recent-documents">
                    <div class="section-header">
                        <h2>Documents Récents</h2>
                        <a href="#" style="font-size: 0.9rem; color: var(--orange);">Tout voir</a>
                    </div>

                    <ul class="document-list">
                        <li class="document-item">
                            <div class="document-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="document-details">
                                <div class="document-name">Acte de naissance #NC-2023-10-1567</div>
                                <div class="document-info">
                                    <span><i class="far fa-user"></i> Amina Bamba</span>
                                    <span><i class="far fa-calendar"></i> 15/10/2023</span>
                                </div>
                            </div>
                            <div class="document-actions">
                                <div class="document-action">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="document-action">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                        </li>

                        <li class="document-item">
                            <div class="document-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="document-details">
                                <div class="document-name">Acte de mariage #MC-2023-09-0456</div>
                                <div class="document-info">
                                    <span><i class="far fa-user"></i> Kouamé Jean & Traoré Aïcha</span>
                                    <span><i class="far fa-calendar"></i> 28/09/2023</span>
                                </div>
                            </div>
                            <div class="document-actions">
                                <div class="document-action">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="document-action">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                        </li>

                        <li class="document-item">
                            <div class="document-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="document-details">
                                <div class="document-name">Livret de famille #LF-2023-09-0456</div>
                                <div class="document-info">
                                    <span><i class="far fa-user"></i> Famille Kouamé-Traoré</span>
                                    <span><i class="far fa-calendar"></i> 29/09/2023</span>
                                </div>
                            </div>
                            <div class="document-actions">
                                <div class="document-action">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="document-action">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
