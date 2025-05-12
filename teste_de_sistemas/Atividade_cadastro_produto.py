from selenium import webdriver
from selenium.webdriver.common.by import By
import time

#configuração do webDriver (nesse exemplo, estamos usando o chrome)
driver = webdriver.Chrome()

driver.get("file:///C:/Users/luiz_c_vaz/Documents/GitHub/LuizVaz_Desen_sistemas_tarde/teste_de_sistemas/Atividade_cadastro_produto.html")
          #   C:\Users\luiz_c_vaz\Documents\GitHub\LuizVaz_Desen_sistemas_tarde\teste_de_sistemas

#preenche o campo nome
nome_input = driver.find_element(By.ID, "cod")
nome_input.send_keys("2")

#preenche o campo CPF
cpf_input = driver.find_element(By.ID, "desc")
cpf_input.send_keys("Potência: 1200 Watts\nTensão: Disponível em 127V (110V) ou 220V\nDiâmetro do disco: 110 mm\nProfundidade de corte: Até 34 mm\nInclinação de corte: Até 45°\nVelocidade sem carga: 12.000 rotações por minuto (RPM)\nPeso: 3,1 kg\n")

#preenche o campio endereço
endereco_input = driver.find_element(By.ID, "mar")
endereco_input.send_keys("Serra Mármore Skil")

#preenche o campio Telefone
telefone_input = driver.find_element(By.ID, "pre")
telefone_input.send_keys("356.90")

telefone_input = driver.find_element(By.ID, "quan")
telefone_input.send_keys("1")


#Clica no bortão de cadastrar
#submit_button  = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
#submit_button.click()

#Agguarde um momento para visulizar o resultado
#9em uma aplicação real, voce vericaria a resposta
time.sleep(20)

driver.quit()