cd /var/www/chenanthony
git fetch
git reset --hard origin/master
rm .gitignore
cd /home/chenanthony365/chenanthony-markov
git fetch
git reset --hard origin/main
sudo pip3 install -r requirements.txt
g++ -O2 markov_mod.cpp -o markov_mod
echo "HCAPTCHA_SITEKEY='something'" >> settings.py
echo "HCAPTCHA_SECRET='other thing'" >> settings.py
sudo service apache2 restart
neofetch
timedatectl
