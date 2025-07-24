 const button = document.querySelectorAll(".button");
 const drop = document.querySelectorAll(".telas");

function mostrarDropdown() {
  drop.forEach(el => el.classList.add('mostrar'));
}

function esconderDropdown() {
  drop.forEach(el => el.classList.remove('mostrar'));
}

button.forEach(btn => {
  btn.addEventListener('mouseenter', mostrarDropdown);
  btn.addEventListener('mouseleave', () => {
    // Verifica se o mouse está dentro do dropdown
    setTimeout(() => {
      const dentroDropdown = Array.from(drop).some(el => el.matches(':hover'));
      const dentroBotao = btn.matches(':hover');

      if (!dentroDropdown && !dentroBotao) {
        esconderDropdown();
      }
    }, 50); // pequeno delay para detectar se entrou no dropdown
  });
});

drop.forEach(menu => {
  menu.addEventListener('mouseenter', mostrarDropdown);
  menu.addEventListener('mouseleave', () => {
    // Se sair do dropdown e do botão, esconde
    setTimeout(() => {
      const dentroDropdown = Array.from(drop).some(el => el.matches(':hover'));
      const dentroBotao = Array.from(button).some(el => el.matches(':hover'));

      if (!dentroDropdown && !dentroBotao) {
        esconderDropdown();
      }
    }, 50);
  });
});

