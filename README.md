# RebelLUG
This is the [RebelLUG](https://rebellug.com) website, a LEGO User Group I co-founded and help run

## todo
- make a dev environment
    - make a docker file to boot the php/mysql server
    - should optionally reference local/test or remote db
- update the map img
- batch compress the instructions imgs, /instructions and the individual instruction pages load super slow because of this
    - just move the current pics to the_folder/compressed and make replace the originals with compressed versions of the same name
- finish update members
- update the collabs
    - the way those are implemented is a mess lol. collab meta data references the db, the code is barebones. it's like database driven development!
- longer term:
    - redo this entire mess. baller move: sveltekit and (some backend). safe move: custom wordpress.
    - drop fetchapp and do all the instructions store stuff on our own backend. needs to send emails and distribute money to members automatically.
    - deploy on cloudflare pages
        - infinite profit %!
