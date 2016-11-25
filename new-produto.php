<?php session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("components/head-imports.php") ?>
  </head>
  <body>
    <?php include("components/navbar/navbar.php") ?>
      <div class="container-fluid">
        <div class="jumbotron">
          <h2>Cadastrar novo calçado</h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <form>
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Informações básicas</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label for="nome">Nome do produto</label>
                  <input type="text" class="form-control" id="nome" placeholder="Nome do seu produto aqui" name="nome">
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-sm-4">
                    <label for="preco">Preço (em reais)</label>
                    <div class="input-group">
                      <div class="input-group-addon">R$</div>
                      <input type="text" class="form-control" id="preco" placeholder="Valor" name="preco">
                      <div class="input-group-addon">.00</div>
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-sm-4">
                    <label for="tamanho">Tamanho do calçado</label>
                      <select id="tamanho" name="tamanho" class="form-control">
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                      </select>
                  </div>
                  <div class="form-group col-xs-12 col-sm-4">
                    <label class="control-label" for="cor">Cor predominante</label>
                      <select id="cor" name="cor" class="form-control">
                        <option value="Branco">Branco</option>
                        <option value="Preto">Preto</option>
                        <option value="Vermelho">Vermelho</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rosa">Rosa</option>
                        <option value="Amarelo">Amarelo</option>
                        <option value="Cinza">Cinza</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="composicao">Composição do calçado</label>
                  <textarea class="form-control" id="composicao" name="composicao" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-sm-6">
                    <label for="fornecedor">Fornecedor</label>
                      <select id="fornecedor" name="fornecedor" class="form-control">
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                      </select>
                  </div>

                  <div class="form-group col-xs-12 col-sm-6">
                    <label for="categoria">Categoria do calçado</label>
                      <select id="categoria" name="categoria" class="form-control">
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Arquivo</label>
                    <input type="file" name="arquivo" class="form-control" />


                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include("components/body-imports.php") ?>
  </body>
</html>
