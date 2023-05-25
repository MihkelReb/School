function print_module() {
    console.log(module);
}

// mahdollistetaan print_module-funktion kutsu muusta tiedostosta.
            // haluttu nimi //funktio(t) jotka exportataan
module.exports.log_module_info_to_console = print_module
