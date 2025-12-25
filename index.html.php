<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jigawa State Scholarship Portal</title>
<style type="text/css">
/* 2025 Deep Dark Aesthetic */
:root {
    --primary-neon: #00e5ff;
    --accent-glow: rgba(0, 229, 255, 0.3);
    --dark-bg: #080a0f;
    --card-bg: rgba(255, 255, 255, 0.03);
}

body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: 'Inter', 'Segoe UI', sans-serif;
    background-color: var(--dark-bg);
    color: white;
    overflow-x: hidden;
}

/* Animated Background Image Container */
.hero-section {
	position: relative;
	width: 100%;
	height: 100vh;
	background: linear-gradient(rgba(8, 10, 15, 0.8), rgba(8, 10, 15, 0.8)), 
                url('PIC 1.jpg') center/cover no-repeat;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	text-align: center;
	background-image: url(1.png);
}

/* Floating Animation for Header Container */
.header-content {
    animation: float 4s ease-in-out infinite;
    margin-bottom: 50px;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
}

h1 {
    font-size: 3.5rem;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: white; /* Set a solid color */
    margin-bottom: 10px;
    /* NEW: Add the glowing animation to the H1 text */
    animation: neonGlow 1.5s ease-in-out infinite alternate;
}

/* Keyframes for the "Jigawa State" Text Glow Animation */
@keyframes neonGlow {
    from { 
        text-shadow: 
            0 0 10px var(--primary-neon), 
            0 0 20px var(--primary-neon), 
            0 0 30px var(--accent-glow); 
    }
    to { 
        text-shadow: 
            0 0 5px var(--primary-neon), 
            0 0 15px var(--primary-neon), 
            0 0 40px var(--accent-glow); 
    }
}


/* Nav Card Container */
.nav-container {
    display: flex;
    gap: 30px;
    z-index: 2;
}

/* Animated Action Cards */
.nav-card {
    background: var(--card-bg);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 30px 50px;
    border-radius: 20px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 1.2rem;
    letter-spacing: 1px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.nav-card::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
    transition: 0.5s;
}

.nav-card:hover::before {
    left: 100%;
}

.nav-card:hover {
    transform: scale(1.1);
    border-color: var(--primary-neon);
    box-shadow: 0 0 30px var(--accent-glow);
    background: rgba(255, 255, 255, 0.08);
}

.admin-btn { border-color: #ff3d00; }
.admin-btn:hover { box-shadow: 0 0 30px rgba(255, 61, 0, 0.3); border-color: #ff3d00; }

/* Responsive Design */
@media (max-width: 768px) {
    .nav-container { flex-direction: column; width: 80%; }
    h1 { font-size: 2rem; }
}
</style>
</head>

<body>

<div class="hero-section">
    <div class="header-content">
        <h1>JIGAWA STATE SCHOLARSHIP</h1>
        <p style="opacity: 0.6;">Empowering the future of the State</p>
    </div>

    <div class="nav-container">
        <a href="admin login.php" class="nav-card admin-btn">ADMIN</a>
        <a href="acc.php" class="nav-card">REGISTER NOW</a>
        <a href="Untitled-1.php" class="nav-card">STUDENT LOGIN</a>
    </div>
</div>

</body>
</html>
