<form action="{{ route('admin.contacts.store') }}" method="POST">
 @csrf
 <input type="email" name="email" placeholder="Votre email">
 <br><br>
 <textarea name="message" placeholder="Votre message"></textarea>
 <br><br>
 <button type="submit">Envoyer</button>
</form>