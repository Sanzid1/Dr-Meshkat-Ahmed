<?php require_once '../includes/header.php'; ?>

<section class="cv-section" data-scroll>
    <h2>Prof. Dr. Chaudhury Meshkat Ahmed</h2>
    <h3 class="subtitle text-center">Emeritus Professor of Cardiology</h3>
    
    <div class="bio-nav">
        <a href="<?= $base_url ?>/biodata/academic.php" class="bio-nav-item">
            <div class="bio-nav-icon">🎓</div>
            <span>Academic Credentials</span>
        </a>
        <a href="<?= $base_url ?>/biodata/experience.php" class="bio-nav-item">
            <div class="bio-nav-icon">💼</div>
            <span>Professional Experience</span>
        </a>
        <a href="<?= $base_url ?>/biodata/publications.php" class="bio-nav-item">
            <div class="bio-nav-icon">📚</div>
            <span>Publications</span>
        </a>
        <a href="<?= $base_url ?>/biodata/research.php" class="bio-nav-item">
            <div class="bio-nav-icon">🔬</div>
            <span>Research</span>
        </a>
        <a href="<?= $base_url ?>/biodata/awards.php" class="bio-nav-item">
            <div class="bio-nav-icon">🏆</div>
            <span>Awards</span>
        </a>
    </div>
    
    <div class="bio-summary">
        <p>Prof. Dr. Chaudhury Meshkat Ahmed is a distinguished cardiologist with over 40 years of experience in clinical practice, research, and medical education. As an Emeritus Professor of Cardiology, he has made significant contributions to cardiovascular medicine in Bangladesh and internationally.</p>
        
        <p>His expertise spans interventional cardiology, cardiovascular epidemiology, and preventive cardiology with a focus on improving cardiac care in resource-limited settings. With over 150 peer-reviewed publications and numerous prestigious awards, Dr. Meshkat Ahmed continues to be a leading figure in cardiology in South Asia.</p>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>Career Highlights</h2>
    
    <div class="timeline">
        <div class="timeline-container">
            <div class="timeline-item" style="--item-index: 0">
                <div class="timeline-date">2015-Present</div>
                <div class="timeline-content">
                    <h3>Emeritus Professor</h3>
                    <p>Dhaka Medical College</p>
                </div>
            </div>
            
            <div class="timeline-item" style="--item-index: 1">
                <div class="timeline-date">2005</div>
                <div class="timeline-content">
                    <h3>FACC</h3>
                    <p>American College of Cardiology</p>
                </div>
            </div>
            
            <div class="timeline-item" style="--item-index: 2">
                <div class="timeline-date">1997</div>
                <div class="timeline-content">
                    <h3>MD Cardiology</h3>
                    <p>National Institute of Cardiovascular Diseases</p>
                </div>
            </div>
            
            <div class="timeline-item" style="--item-index: 3">
                <div class="timeline-date">1984</div>
                <div class="timeline-content">
                    <h3>MBBS</h3>
                    <p>Mymensingh Medical College, Dhaka University</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.text-center {
    text-align: center;
}

.subtitle {
    color: var(--text-secondary);
    margin-bottom: 3rem;
    font-size: 1.5rem;
}

.bio-nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
    margin: 3rem 0;
}

.bio-nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: var(--text-primary);
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
    width: 160px;
    transition: all 0.3s ease;
}

.bio-nav-item:hover {
    transform: translateY(-5px);
    border-color: var(--accent-color);
    box-shadow: 0 8px 20px rgba(33, 150, 243, 0.15);
}

.bio-nav-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.bio-summary {
    background: var(--card-bg);
    border-radius: 16px;
    border: 1px solid var(--border-color);
    padding: 2rem;
    margin-top: 3rem;
    line-height: 1.8;
    color: var(--text-secondary);
}

.bio-summary p:not(:last-child) {
    margin-bottom: 1.5rem;
}

@media (max-width: 768px) {
    .bio-nav {
        gap: 1rem;
    }
    
    .bio-nav-item {
        width: 130px;
        padding: 1rem;
    }
}
</style>

<?php require_once '../includes/footer.php'; ?>