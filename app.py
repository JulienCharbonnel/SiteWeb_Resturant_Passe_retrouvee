import os
import json
from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)  # Activer CORS pour l'ensemble de l'application

@app.route('/update_prix_menu', methods=['POST'])
def update_prix_menu():
    # Récupérer les données du formulaire envoyées dans la requête POST
    data = request.json

    # Vider complètement le fichier JSON et écrire le contenu mis à jour
    with open('prixMenu.json', 'w') as json_file:
        json.dump(data, json_file)

    # Retourner une réponse indiquant que les modifications ont été enregistrées avec succès
    return jsonify({'message': 'Modifications enregistrées avec succès'}), 200

if __name__ == '__main__':
    app.run(debug=True)
