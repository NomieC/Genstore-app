<!DOCTYPE html>
<html>
<head>
<style>
    :root {
    --duration: 20s;
    --delay: 20s;
}

html {
    background-color: black;
    animation: shrink var(--duration) var(--delay) linear infinite;
}

body {
    position: relative;
    margin: 0 auto;
    padding: 0 1rem;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    animation: spin var(--duration) var(--delay) linear infinite;
    transform-style: preserve-3d;
    perspective: 25rem;
}

img {
    --duration: 40s;
    --name: float-up-1;
    position: absolute;
    top: 0;
    left: 0;
    width: 33vw;
    transform: translateY(200vh);
    animation: var(--name) var(--duration) linear infinite;
    box-shadow: 1px 3px 15px rgba(0, 0, 0, 0.5);
    z-index: 1;
}

img:nth-child(1) {
    animation-delay: 0s;
}

img:nth-child(2) {
    animation-delay: -3s;
}

img:nth-child(3) {
    animation-delay: -6s;
}

img:nth-child(4) {
    animation-delay: -9s;
}

img:nth-child(5) {
    animation-delay: -12s;
}

img:nth-child(6) {
    animation-delay: -15s;
}

img:nth-child(7) {
    animation-delay: -18s;
}

img:nth-child(8) {
    animation-delay: -21s;
}

img:nth-child(9) {
    animation-delay: -24s;
}

img:nth-child(10) {
    animation-delay: -27s;
}

img:nth-child(1) {
    --name: float-up-1;
    --duration: calc(20s * 1);
    left: 0vw;
    z-index: -1;
}

img:nth-child(2) {
    --name: float-up-3;
    --duration: calc(20s * 3);
    left: 10vw;
    z-index: -3;
}

img:nth-child(3) {
    --name: float-up-2;
    --duration: calc(20s * 2);
    left: 90vw;
    z-index: -2;
}

img:nth-child(4) {
    --name: float-up-1;
    --duration: calc(20s * 1);
    left: 36vw;
    z-index: -1;
}

img:nth-child(5) {
    --name: float-up-3;
    --duration: calc(20s * 3);
    left: 62vw;
    z-index: -3;
}

img:nth-child(6) {
    --name: float-up-2;
    --duration: calc(20s * 2);
    left: 15vw;
    z-index: -2;
}

img:nth-child(7) {
    --name: float-up-2;
    --duration: calc(20s * 2);
    left: 55vw;
    z-index: -2;
}

img:nth-child(8) {
    --name: float-up-3;
    --duration: calc(20s * 3);
    left: -20vw;
    z-index: -3;
}

img:nth-child(9) {
    --name: float-up-1;
    --duration: calc(20s * 1);
    left: 68vw;
    z-index: -1;
}

img:nth-child(10) {
    --name: float-up-2;
    --duration: calc(20s * 2);
    left: 0vw;
    z-index: -2;
}

@keyframes float-up-3 {
    from {
        transform: translateY(200vh) translateZ(-50vh);
    }

    to {
        transform: translateY(-200vh) translateZ(-50vh);
    }
}

@keyframes float-up-2 {
    from {
        transform: translateY(150vh) translateZ(-25vh);
    }

    to {
        transform: translateY(-150vh) translateZ(-25vh);
    }
}

@keyframes float-up-1 {
    from {
        transform: translateY(100vh);
    }

    to {
        transform: translateY(-100vh);
    }
}

  </style>
</head>
<body>
  <div class="grid" id="grid">
  <img src='https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1510771463146-e89e6e86560e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1518717758536-85ae29035b6d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1535930891776-0c2dfb7fda1a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
    <img src='https://images.unsplash.com/photo-1504595403659-9088ce801e29?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
  </div>
  
</body>
</html>
