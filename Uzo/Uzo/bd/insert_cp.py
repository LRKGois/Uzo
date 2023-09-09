import csv
import mysql.connector

# Configurações de conexão com o banco de dados
db_config = {
    'host': 'localhost',    # Host do MySQL
    'user': 'root',  # Seu nome de usuário do MySQL
    'password': '',  # Sua senha do MySQL
    'database': 'projeto_uzo'  # Nome da sua base de dados
}

# Nome do arquivo CSV
csv_file = 'Uzo/bd/codigos_postais_formatado.csv'

try:
    # Estabelecer conexão com o banco de dados
    connection = mysql.connector.connect(**db_config)

    # Preparar o cursor
    cursor = connection.cursor()

    # Ler o arquivo CSV e inserir os dados na tabela
    with open(csv_file, mode='r', newline='', encoding='utf-8', errors='replace') as file:
        csv_reader = csv.DictReader(file, delimiter=';')
        for row in csv_reader:
            morada = row['morada']
            num_cod_postal = int(row['num_cod_postal'])
            ext_cod_postal = int(row['ext_cod_postal'])
            desig_postal = row['desig_postal']

            # Inserir dados na tabela codigos_postais
            insert_query = "INSERT INTO codigos_postais (morada, num_cod_postal, ext_cod_postal, desig_postal) VALUES (%s, %s, %s, %s)"
            values = (morada, num_cod_postal, ext_cod_postal, desig_postal)
            cursor.execute(insert_query, values)

    # Commit das mudanças no banco de dados
    connection.commit()

    print("Dados inseridos com sucesso na tabela 'codigos_postais'. (python)")

except mysql.connector.Error as err:
    print(f"Erro: {err}")

finally:
    # Fechar o cursor e a conexão
    if cursor:
        cursor.close()
    if connection:
        connection.close()