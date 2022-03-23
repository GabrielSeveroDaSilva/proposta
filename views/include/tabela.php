<table id="tabela" class="uk-table uk-table-hover uk-table-striped uk-table-middle" style="width:100%">
        <thead>
            <tr>
                <th>Proposta</th>
                <th>Cliente</th>
                <th>Data de abertura</th>
                <th>Tipo de movimentação</th>
                <th>Item</th>
                <th>Código do produto</th>
                <th>Descrição do produto</th>
                <th>Informações adicionais do produto</th>
                <th>Qtde</th>
                <th>Valor unitário</th>
                <th>Valor total dos produtos</th>
                <th>Valor total com desconto</th>
                <th>Prazo de entrega(dias)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php  
            foreach($data as $p ){?>
        
            <td><?= $p["id"]?></td>
            <td><?= $p["cliente_id"]?></td>
            <td><?= $p["data_de_abertura"]?></td>
            <td><?= $p["tipo_de_movimentação"]?></td>
            <td><?= $p["item"]?></td>
            <td><?= $p["codigo_do_produto"]?></td>
            <td><?= $p["descrição_do_produto"]?></td>
            <td><?= $p["informações_do_produto"]?></td>
            <td><?= $p["qtde"]?></td>
            <td><?= $p["valor_unitario"]?></td>
            <td><?= $p["valor_total_dos_produtos"]?></td>
            <td><?= $p["prazo_de_entrega"]?></td>
            <td><?= $p["status"]?></td>

           
            <?php }?> 

        </tbody>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Data de abertura</th>
                <th>Tipo de movimentação</th>
                <th>Item</th>
                <th>Código do produto</th>
                <th>Descrição do produto</th>
                <th>Informações adicionais do produto</th>
                <th>Qtde</th>
                <th>Valor unitário</th>
                <th>Valor total dos produtos</th>
                <th>Valor total com desconto</th>
                <th>Prazo de entrega(dias)</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>