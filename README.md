# institutional-marketing
- Link de acesso: a definir
- Link de healthcheck: a definir

## Fazer deploy para produção
O deploy sempre irá iniciar quando uma nova tag for gerada para o repositório.

Para fazer deploy em produção é necessário criar um pull request, aguardar sua aprovação e fazer merge para a branch `main`.

Após o processo acima ser concluído, siga as seguintes etapas:

- Com sua branch `main` atualizada, gere uma tag indicando o número da nova versão(deverá seguir o padrão `x.x.x`, `0.0.1`, por exemplo).
Na dúvida, acesse a página de [tags](https://github.com/lojaintegrada/institutional-marketing/tags) do repositório.

  - `git tag 0.0.1`

- Suba a tag para o repositório com o seguinte comando:

  - `git push origin 0.0.1`

- Você poderá acompanhar seu deploy na aba [Actions](https://github.com/lojaintegrada/institutional-marketing/actions) do repositório;
![image](https://github.com/user-attachments/assets/9b03c7d5-ca3e-4d6d-93ea-247677ae7418)

- Ao final do processo, uma mensagem será enviada ao canal do Slack **#institutional**:
![image](https://github.com/user-attachments/assets/ba69af55-3587-4f48-9173-31340f44a150)
