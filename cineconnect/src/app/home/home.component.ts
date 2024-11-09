import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
  standalone: true,
  imports: [CommonModule]  // Add CommonModule here

})
export class HomeComponent {
  films = [
    { title: 'John Wick', image: '../../assets/img/John.jpg', rating: 4.5 },
    { title: 'Inception', image: '../../assets/img/inception.jpg', rating: 5 },
    { title: 'Star Wars', image: '../../assets/img/StarWars.jpg', rating: 4 },
    { title: 'Thor', image: '../../assets/img/Thor.jpg', rating: 4.5 },
    { title: 'Godzilla', image: '../../assets/img/Godzila.jpg', rating: 3.5 },
    { title: 'Aquaman', image: '../../assets/img/Aquaman.jpg', rating: 4 },
    { title: 'Spiderman', image: '../../assets/img/Spiderman.jpg', rating: 4 },
    { title: 'Avenger', image: '../../assets/img/Endgame.jpg', rating: 5 }
  ];

  getStars(rating: number): number[] {
    return Array(Math.round(rating)).fill(0);
  }
}
