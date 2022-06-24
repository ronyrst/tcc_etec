from selenium import webdriver
import time

class whatsappBot:
    def __init__(self):
        self.mensagem = "Hello world"
        self.grupos = ["Storage"]
        options = webdriver.ChromeOptions()
        options.add_argument('lang-pt-br')

        # esse trecho de código é para windows
        #self.driver = webdriver.Chrome(executable_path=r'./chromedriver.exe')

        self.driver = webdriver.Chrome(executable_path=r'./chromedriver')

    def EnviarMensagens(self):
        #<span dir="auto" title="Storage" class="ggj6brxn gfz4du6o r7fjleex g0rxnol2 lhj4utae le5p0ye3 l7jjieqr i0jNr">
        #    Storage
        #</span>

        #<div tabindex="-1" class="p3_M1">
        #    <div tabindex="-1" class="_1UWac _1LbR4">
        #        <div class="_2vbn4" style="visibility: visible;">
        #            Mensagem
        #        </div>
        #        <div title="Mensagem" role="textbox" class="_13NKt copyable-text selectable-text" contenteditable="true" data-tab="10" dir="ltr" spellcheck="false">
        #        </div>
        #    </div>
        #</div>

        #<span data-testid="send" data-icon="send" class="">
        #    <svg viewBox="0 0 24 24" width="24" height="24" class="">
        #        <path fill="currentColor" d="M1.101 21.757 23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z">
        #        </path>
        #    </svg>
        #</span>

# Olá Jubiscreuda, nós do banco de sangue Hemocentro HSP Unifesp, estamos em deficiência do tipo sanguíneo B+, e localizamos em nosso banco de dados que a senhora possui este mesmo sangue, e sua ultima doação foi em 21/09/2019, sendo apta para realizar uma doação este mês, solicitamos por gentileza a sua colaboração para salvar as vidas que necessitam desta sua doação.

# Informações para doar:
# - Consuma alimentos leves, não é possível doar em jejum
# - Evitar alimentos gordurosos no dia da doação 
# - Hidrate-se

#https://www.youtube.com/watch?v=ISYHWfWvp3E
#12:14
